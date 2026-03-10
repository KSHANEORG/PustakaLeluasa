<x-filament-widgets::widget>
    <x-filament::section>
        <style>
            .asdf {
            display:grid;
            grid-template-columns:repeat(5,1fr);
            gap: 1rem;
            text-align: center;
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
                border: 2px solid #555;
                border-radius: 12px;
                padding: 1rem;
                align-items: center;
                text-align: center;
            }

            .img-asdf {
                height:125px;
                width:auto;
                object-fit:cover;
                border-radius:12px;
                                            margin-right: auto;
            margin-left: auto;
            }
            </style>
        <h1 style=font-size:30px> Semua Buku </h1>
        <?php
        $books = DB::table('books')->orderByDesc('bookname')->get();
        ?>
        <div class=asdf>
        @foreach ($books as $book)
            
        <div class=lope>
             <a href="/{{ $book->specialbookid }}" ><img class=img-asdf src={{ $book->imageurl }}><p> {{ $book->bookname }}<br><strong>{{ 'Rp '.number_format($book->price, 2) }}</strong></p></a>
</div>
             @endforeach
</div>

    </x-filament::section>
</x-filament-widgets::widget>
