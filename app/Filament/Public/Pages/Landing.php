<?php

namespace App\Filament\Public\Pages;

use App\Models\Book;
use Filament\Pages\Page;

class Landing extends Page
{
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-home';

    protected static ?string $title = 'Pustaka Leluasa';

    protected string $view = 'filament.public.pages.landing';

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $slug = '/';

    public function getBooks()
    {
        return Book::paginate(10);
    }
}
