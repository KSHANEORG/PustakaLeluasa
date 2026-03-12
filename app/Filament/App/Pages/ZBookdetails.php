<?php

namespace App\Filament\App\Pages;

use App\Models\Book;
use Filament\Panel;
use Filament\Pages\Page;

class ZBookdetails extends Page
{
    protected string $view = 'filament.app.pages.z-bookdetails';
    protected static bool $shouldRegisterNavigation = false;

    public Book $book;
    public float $averageRating;
    public int $ratingsCount;
    public ?int $userRating = null;

    public static function getSlug(?Panel $panel = null): string
    {
        return 'book/{specialbookid}';
    }

    public function mount(string $specialbookid): void
    {
        $this->book = Book::where('specialbookid', $specialbookid)->firstOrFail();
        $this->averageRating = (float) ($this->book->ratings()->avg('rating') ?? 0);
        $this->ratingsCount = $this->book->ratings()->count();
        $this->userRating = auth()->user()
            ?->bookRatings()
            ->where('book_id', $this->book->id)
            ->value('rating');
        $this->book->increment('views');
    }
}
