<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class BorrowStatus extends Page
{
    protected string $view = 'filament.app.pages.borrow-status';
    protected static \UnitEnum|string|null $navigationGroup = 'Manage';
}
