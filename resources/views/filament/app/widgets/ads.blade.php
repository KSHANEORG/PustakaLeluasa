<x-filament-widgets::widget>
    <x-filament::section>
        <style>
            .asdf {
            display:grid;
            grid-template-columns:repeat(5,1fr);
}

            @media (max-width:640px)    
            {
                .asdf {
                    grid-template-columns:repeat(2,1fr);
                }

            }

            .lope {
                display:block;
                width:100%;
            }

            .img-asdf {
                height:125px;
                width:auto;
                object-fit:cover;
                border-radius:12px;
            }
            </style>
        <h1 style=font-size:30px> Buku Populer </h1>
        <?php
        $books = DB::table('books')->orderByDesc('views')->paginate(5);
        ?>
        <div class=asdf>
        @foreach ($books as $book)
            
        <div class=lope>
             <a href="/{{ $book->specialbookid }}" ><p><img class=img-asdf src={{ $book->imageurl }}> {{ $book->bookname }}</p></a>
</div>
             @endforeach
</div>

    </x-filament::section>
</x-filament-widgets::widget>
