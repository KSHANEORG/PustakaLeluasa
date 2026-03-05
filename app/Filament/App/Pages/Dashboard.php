<?php

namespace App\Filament\App\Pages;

use App\Filament\App\Widgets\Ads;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $title = 'Toko';

    protected string $view = 'filament.app.pages.dashboard';

    public function getHeaderWidgetsColumns(): int | array
{
    return 1;
}

    public function getHeaderWidgets(): array
    {
        return [
            Ads::class,
        ];
    }
}
