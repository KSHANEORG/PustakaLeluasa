<x-filament-panels::page>
   <p>Halo, {{ auth()->user()->name }}!</p>
   <p>Ini adalah halaman akun kamu. Di sini kamu bisa melihat koleksi buku yang sudah kamu miliki, dan juga menghapus akun jika kamu ingin.</p>
   <p>Jika kamu ingin melihat koleksi buku kamu, klik tombol di bawah ini:</p>
   <a href="library" class="btn-17">Lihat Koleksi Saya</a>
   <p style="margin-top: 1rem; color: red;">Peringatan: Menghapus akun akan menghapus semua data kamu, termasuk koleksi buku yang sudah kamu miliki. Pastikan kamu yakin sebelum melanjutkan.</p>
   <button type="button" wire:click="deleteAccount">Delete Account</button>

<p>Fitur ini masih dalam pengembangan.</p>
<p>HARUSNYA aku pakai jetstream, tapi belum sempat.</p>
</x-filament-panels::page>
