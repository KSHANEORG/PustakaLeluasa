<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class Library extends Page
{
    protected string $view = 'filament.app.pages.library';
    protected static \UnitEnum|string|null $navigationGroup = 'Manage';
}
