<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class Wallet extends Page
{
    protected string $view = 'filament.app.pages.wallet';
    protected static \UnitEnum|string|null $navigationGroup = 'Manage';
}
