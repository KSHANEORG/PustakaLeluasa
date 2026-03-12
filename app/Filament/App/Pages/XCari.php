<?php

namespace App\Filament\App\Pages;

use App\Filament\App\Widgets\Ads1;
use App\Filament\App\Widgets\Type;
use Filament\Pages\Page;

class XCari extends Page
{
    protected string $view = 'filament.app.pages.x-cari';
    protected static ?string $title = 'Cari Buku';
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-magnifying-glass';

    public function getHeaderWidgetsColumns(): int | array
{
    return 1;
}

    public function getHeaderWidgets(): array
    {
        return [
            Type::class,
            Ads1::class
        ];
    }
}


