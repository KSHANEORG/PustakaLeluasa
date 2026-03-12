<?php

use App\Models\Book;
use App\Models\BookRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware('auth')->group(function () {
	Route::post('/book/{specialbookid}/collect', function (Request $request, string $specialbookid) {
		$book = Book::where('specialbookid', $specialbookid)->firstOrFail();

		$request->user()->ownedBooks()->syncWithoutDetaching([$book->id]);

		return back()->with('status', 'Buku ditambahkan ke koleksi anda.');
	})->name('collection.add');

	Route::post('/book/{specialbookid}/remove', function (Request $request, string $specialbookid) {
		$book = Book::where('specialbookid', $specialbookid)->firstOrFail();

		$request->user()->ownedBooks()->detach($book->id);

		return back()->with('status', 'Buku dihapus dari koleksi anda.');
	})->name('collection.remove');

	Route::get('/koleksi', function (Request $request) {
		$books = $request->user()
			->ownedBooks()
			->latest('book_user.created_at')
			->get();

		return view('collection', compact('books'));
	})->name('collection.index');

	Route::post('/book/{specialbookid}/rate', function (Request $request, string $specialbookid) {
		$validated = $request->validate([
			'rating' => ['required', 'integer', 'min:1', 'max:5'],
		]);

		$book = Book::where('specialbookid', $specialbookid)->firstOrFail();

		BookRating::updateOrCreate(
			[
				'book_id' => $book->id,
				'user_id' => $request->user()->id,
			],
			[
				'rating' => $validated['rating'],
			]
		);

		return back()->with('status', 'Rating buku berhasil disimpan.');
	})->name('book.rate');
});

Route::get('/{specialbookid}', function (string $specialbookid) {
	return redirect("/app/book/{$specialbookid}");
})->name('z-bookdetails');

Route::post('/app/wallet/topup', function (Request $request) {
	$amount = $request->validate([
		'amount' => ['required', 'min:10000', 'max:1000000'],
	])['amount'];

	return back()->with('status', 'Permintaan top-up sebesar Rp ' . number_format($amount, 0, ',', '.') . ' diterima (fitur masih dalam pengembangan).');
})->name('top-up');
