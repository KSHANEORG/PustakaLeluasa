<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class UnpaidInvoice extends Page
{
    protected string $view = 'filament.app.pages.unpaid-invoice';
        protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-currency-dollar';
     protected static \UnitEnum|string|null $navigationGroup = 'Akun';
     protected static ?string $title = 'Tagihan';
}
