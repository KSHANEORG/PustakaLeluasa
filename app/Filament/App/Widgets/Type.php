<?php

namespace App\Filament\App\Widgets;

use App\Models\Book;
use Filament\Widgets\Widget;

class Type extends Widget
{
    protected string $view = 'filament.app.widgets.type';

    public string $search = '';

    public function getResults(): \Illuminate\Database\Eloquent\Collection
    {
        if (blank($this->search)) {
            return new \Illuminate\Database\Eloquent\Collection();
        }

        return Book::where('bookname', 'like', '%' . $this->search . '%')
            ->limit(8)
            ->get();
    }
}
