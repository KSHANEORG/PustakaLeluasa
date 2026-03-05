<x-filament-widgets::widget>
    <x-filament::section>
        <p>Apa yang kamu suka?</p>
                <?php
        $category = DB::table('categories')->get();
        ?>
        <div style=display:grid;grid-template-columns:repeat(5,1fr);>
        @foreach ($category as $cat)
            
             <a class=button href="">{{ $cat -> type }}</a>
        @endforeach
</div>
    </x-filament::section>
</x-filament-widgets::widget>
