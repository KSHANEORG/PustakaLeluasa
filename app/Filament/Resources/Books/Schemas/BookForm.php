<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('bookname')
                    ->required(),
                TextInput::make('imageurl')
                    ->default(null),
                TextInput::make('specialbookid')
                    ->required(),
                TextInput::make('views')
                    ->default(null),
            ]);
    }
}
