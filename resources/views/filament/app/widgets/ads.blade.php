<x-filament-widgets::widget>
    <x-filament::section>
        <h1 style=font-size:30px> Trending Books </h1>
        <?php
        $books = DB::table('books')->get();
        ?>
        <div style=display:grid;grid-template-columns:repeat(5,1fr);>
        @foreach ($books as $book)
            
             <a href="{{ $book->specialbookid }}"><p><img style=height:150px src={{ $book->imageurl }}> {{ $book->bookname }}</p></a>
        @endforeach
</div>
    </x-filament::section>
</x-filament-widgets::widget>
