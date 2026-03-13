<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Hubungi extends Page
{
        protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-phone';
    protected string $view = 'filament.pages.hubungi';
        protected static ?string $title = 'Hubungi Kami';
    protected static \UnitEnum|string|null $navigationGroup = 'Lainnya';
}
