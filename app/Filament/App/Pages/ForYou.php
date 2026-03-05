<?php

namespace App\Filament\App\Pages;

use BackedEnum;
use Filament\Pages\Page;

class ForYou extends Page
{
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-book-open';
    protected string $view = 'filament.app.pages.for-you';
}
