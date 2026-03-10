<x-filament-panels::page>
 <script src="https://cdn.tailwindcss.com"></script>
<div class="mb-6 flex justify-end items-center gap-4">
        @auth
            <a href="{{ url('/app') }}" class="text-sm font-medium text-primary-600 hover:text-primary-500">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="text-sm font-medium text-primary-600 hover:text-primary-500">
                Login
            </a>
            <a href="{{ url('/app/register') }}" class="text-sm font-medium text-primary-600 hover:text-primary-500">
                Sign up
            </a>
        @endauth
    </div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
        {{-- Book Image --}}
        <div class="flex justify-center items-start">
            <img src="{{ asset($book->imageurl) }}" alt="{{ $book->bookname }}" 
                 class="w-full max-w-sm rounded-lg shadow-2xl transform hover:scale-105 transition-transform duration-500">
        </div>

        {{-- Book Details --}}
        <div class="space-y-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $book->bookname }}</h1>
                <div class="mt-2 flex items-center space-x-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                        <x-heroicon-s-eye class="w-4 h-4 mr-1 text-gray-500" />
                        {{ number_format($book->views) }} views
                    </span>
                </div>
            </div>

            <div class="p-4 bg-primary-50 dark:bg-primary-900/20 rounded-lg border border-primary-100 dark:border-primary-900/30">
                <span class="text-sm text-primary-600 dark:text-primary-400 font-medium">Harga Sekarang</span>
                <p class="text-3xl font-extrabold text-primary-700 dark:text-primary-300">
                    Rp {{ number_format($book->price) }}
                </p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Deskripsi</h2>
                <p class="mt-2 text-gray-600 dark:text-gray-400 leading-relaxed">
                    {{ $book->description }}
                </p>
            </div>

            <div class="pt-6 flex flex-col sm:flex-row gap-4">
                <x-filament::button size="lg" icon="heroicon-o-shopping-cart" class="flex-1">
                    Beli Sekarang
                </x-filament::button>
                <x-filament::button size="lg" color="gray" outline class="flex-1">
                    Tambah ke Keranjang
                </x-filament::button>
            </div>
        </div>
    </div>
</x-filament-panels::page>
