<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class Library extends Page
{
    protected string $view = 'filament.app.pages.library';
        protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-book-open';
    protected static \UnitEnum|string|null $navigationGroup = 'Akun';
    protected static ?string $title = 'Koleksi Buku';
}
