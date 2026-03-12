<x-filament-widgets::widget>
    <x-filament::section>
        <h1 style="font-size: 30px; margin-bottom: 0.75rem;">Punya ide?</h1>

        <input
            type="text"
            wire:model.live.debounce.300ms="search"
            placeholder="Cari buku..."
            style="width: 100%; padding: 0.5rem 0.75rem; border: 1px solid #d1d5db; border-radius: 0.5rem; font-size: 1rem; outline: none;"
        />

        @php $results = $this->getResults() @endphp

        @if ($results->isNotEmpty())
            <div style="margin-top: 0.75rem; display: flex; flex-direction: column; gap: 0.5rem;">
                @foreach ($results as $book)
                    <a
                        href="{{ route('z-bookdetails', $book->specialbookid) }}"
                        style="display: flex; align-items: center; gap: 0.75rem; padding: 0.5rem; border-radius: 0.5rem; text-decoration: none; color: inherit; transition: background 0.15s;"
                        onmouseover="this.style.background='#f3f4f6'" onmouseout="this.style.background=''"
                    >
                        <img src="{{ asset($book->imageurl) }}" alt="{{ $book->bookname }}" style="width: 40px; height: 56px; object-fit: cover; border-radius: 4px; flex-shrink: 0;">
                        <span style="font-size: 0.95rem; font-weight: 500;">{{ $book->bookname }}</span>
                    </a>
                @endforeach
            </div>
        @elseif (filled($search))
            <p style="margin-top: 0.75rem; color: #6b7280; font-size: 0.9rem;">Tidak ada buku yang ditemukan.</p>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
