<?php

namespace App\Filament\App\Pages;

// use App\Livewire\DebugInfo;
use App\Livewire\Interest;
use BackedEnum;
use Filament\Pages\Page;

class ForYou extends Page
{
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $title = 'Pilihan Untukmu';
    protected string $view = 'filament.app.pages.for-you';
    public function getHeaderWidgetsColumns(): int | array
{
    return 1;
}

    public function getHeaderWidgets(): array
    {
        return [
           // DebugInfo::class,
            Interest::class,
        ];
    }
}
