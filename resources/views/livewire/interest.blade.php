<x-filament-widgets::widget>
    <x-filament::section>
        <p class="mb-4">Apa yang kamu suka?</p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); gap: 10px;">
            @foreach ($categories as $cat)
                <button
                    type="button"
                    wire:click="toggleInterest({{ $cat['id'] }})"
                    @class([
                        'px-4 py-2 rounded font-medium transition-colors',
                        'bg-blue-500 text-white hover:bg-blue-600' => in_array($cat['id'], $selectedInterests),
                        'bg-gray-200 text-gray-700 hover:bg-gray-300' => !in_array($cat['id'], $selectedInterests),
                    ])
                >
                    {{ $cat['type'] }}
                </button>
            @endforeach
        </div>
    </x-filament::section>
<br>
    <x-filament::section>
        <h2 class="text-lg font-bold mb-4">Rekomendasi Buku Untuk Anda</h2>
        <br>
        @if ($recommendedBooks)
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 20px;">
                @foreach ($recommendedBooks as $book)
                <a href="{{ route('z-bookdetails', $book['specialbookid']) }}" style="text-decoration: none; color: inherit;">
                    <div style="padding: 1rem;" class="border rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow">
                        @if ($book['imageurl'])
                            <img src="{{ $book['imageurl'] }}" alt="{{ $book['bookname'] }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px">
                        @else
                            <div style="width: 100%; height: 200px; background-color: #e5e7eb; display: flex; align-items: center; justify-content: center; border-radius: 15px">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        <div class="p-3">
                            <h3 class="font-semibold text-sm truncate">{{ $book['bookname'] }}</h3>
                            @if ($book['price'])
                                <p class="text-xs text-gray-600 mt-1">{{ 'Rp '.number_format($book['price'],2) }}</p>
                            @endif
                        </div>
                    </div>
</a>
                @endforeach
            </div>
        @else
            <p class="text-gray-500">Belum ada rekomendasi buku yang tersedia.</p>
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
