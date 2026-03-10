<?php

namespace App\Filament\Public\Pages;

use App\Models\Book;
use Filament\Pages\Page;

class ViewBook extends Page
{
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-book-open';

    protected string $view = 'filament.public.pages.view-book';

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $slug = '{specialbookid}';

    public Book $book;

    public function mount($specialbookid)
    {
        $this->book = Book::where('specialbookid', $specialbookid)->firstOrFail();
    }

    public function getTitle(): string
    {
        return $this->book->bookname;
    }
}
