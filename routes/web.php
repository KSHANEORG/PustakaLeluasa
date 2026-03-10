<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware('auth')->group(function () {
	Route::post('/book/{specialbookid}/collect', function (Request $request, string $specialbookid) {
		$book = Book::where('specialbookid', $specialbookid)->firstOrFail();

		$request->user()->ownedBooks()->syncWithoutDetaching([$book->id]);

		return back()->with('status', 'Buku ditambahkan ke koleksi anda.');
	})->name('collection.add');

	Route::get('/koleksi', function (Request $request) {
		$books = $request->user()
			->ownedBooks()
			->latest('book_user.created_at')
			->get();

		return view('collection', compact('books'));
	})->name('collection.index');
});

Route::get('/{specialbookid}', function (string $specialbookid) {
	$book = Book::where('specialbookid', $specialbookid)->firstOrFail();

	return view('filament.app.pages.z-bookdetails', compact('book'));
})->name('z-bookdetails');
