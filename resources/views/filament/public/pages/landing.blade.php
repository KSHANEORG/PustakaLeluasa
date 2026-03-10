<x-filament-panels::page>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="space-y-8">
        <div class="flex justify-end items-center gap-4">
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

        {{-- Header Section --}}
        <div class="text-center space-y-4">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                PUSTAKA LELUASA
            </h1>
            <p class="max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-400">
               Toko Buku yang paling generik diantara yang generik
            </p>
        </div>

        {{-- Categories Section (Optional/Simplified) --}}
        <div class="flex flex-wrap justify-center gap-2">
            @php
                $categories = DB::table('categories')->get();
            @endphp
            @foreach ($categories as $cat)
                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-primary-100 text-primary-800 dark:bg-primary-900 dark:text-primary-200">
                    {{ $cat->type }}
                </span>
            @endforeach
        </div>

        {{-- Trending Section --}}
        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
            @foreach ($this->getBooks() as $book)
                <div class="group relative flex flex-col bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 transition-opacity duration-300">
                        <img src="{{ asset($book->imageurl) }}" alt="{{ $book->bookname }}" class="w-full h-32 object-center object-cover">
                    </div>
                    <div class="flex-1 p-4 space-y-2 flex flex-col">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                            <a href="{{ url($book->specialbookid) }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $book->bookname }}
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2">
                            {{ $book->description }}
                        </p>
                        <div class="flex-1 flex flex-col justify-end">
                            <p class="text-base font-semibold text-primary-600 dark:text-primary-400">
                                Rp {{ number_format($book->price) }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $this->getBooks()->links() }}
        </div>
    </div>
</x-filament-panels::page>
