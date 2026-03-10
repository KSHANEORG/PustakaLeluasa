<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Category;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class Interest extends Widget
{
    protected string $view = 'livewire.interest';

    public $categories = [];
    public $selectedInterests = [];
    public $recommendedBooks = [];

    public function mount()
    {
        $this->categories = Category::all()->toArray();
        
        if (Auth::check()) {
            $this->selectedInterests = Auth::user()
                ->interests()
                ->pluck('category_id')
                ->toArray();
            
            $this->loadRecommendedBooks();
        }
    }

    public function toggleInterest($categoryId)
    {
        if (!Auth::check()) {
            return;
        }

        $user = Auth::user();

        if (in_array($categoryId, $this->selectedInterests)) {
            $user->interests()->detach($categoryId);
            $this->selectedInterests = array_filter(
                $this->selectedInterests,
                fn($id) => $id !== $categoryId
            );
        } else {
            $user->interests()->attach($categoryId);
            $this->selectedInterests[] = $categoryId;
        }

        $this->loadRecommendedBooks();
        $this->dispatch('interests-updated');
    }

    private function loadRecommendedBooks()
    {
        if (empty($this->selectedInterests)) {
            // If no interests selected, show random books
            $this->recommendedBooks = Book::inRandomOrder()
                ->limit(6)
                ->get()
                ->toArray();
        } else {
            // Get books from selected interest categories
            $this->recommendedBooks = Book::whereHas('categories', function ($query) {
                $query->whereIn('category_id', $this->selectedInterests);
            })
            ->inRandomOrder()
            ->limit(6)
            ->get()
            ->toArray();
        }
    }
}
