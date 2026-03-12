<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class KAkunKu extends Page
{
    protected string $view = 'filament.app.pages.k-akun-ku';
    protected static ?string $title = 'Akun Ku';
    protected static \UnitEnum|string|null $navigationGroup = 'Akun';

    public function deleteAccount(): void
    {
        $user = auth()->user();

        if (! $user) {
            return;
        }

        Auth::logout();
        $user->delete();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        $this->redirect('/');
    }
}
