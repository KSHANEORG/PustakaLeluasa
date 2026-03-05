<x-filament-widgets::widget>
    <x-filament::section>
        <?php
    $users = DB::table('users')->get();
    $id = Auth()->id()
    ?>
    
<div style="border: 3px #ffffff solid;padding:10px;border-radius: 15px;">
    <p style="line-height: 1;"><strong>DEBUG INFO -- soalnya gua ganteng (real no fek fek)</strong></p>
    {{-- Display all users for debugging --}}
    <p style="line-height: 1;">jumlah akun: {{ $users->count() }}</p>
    <p style="line-height: 1;">nomor akun anda: {{ $id }}</p>
    {{-- Access the name of the first user --}}
    <p style="line-height: 1;">{{ $users[$id-1]->name ?? 'No users found' }}</p>
</div>
    </x-filament::section>
</x-filament-widgets::widget>
