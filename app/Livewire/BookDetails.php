<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookDetails extends Component
{
    public $book;

    public function mount($specialbookid)
    {
        $this->book = Book::where('specialbookid', $specialbookid)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.book-details')
            ->layout('layouts.app'); // Assuming there is a layouts.app, or I can use welcome if I want the same look
    }
}
