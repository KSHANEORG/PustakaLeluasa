<x-filament-panels::page>
   <style>
          /* From Uiverse.io by css.btn-17s-io */ 
.btn-17 {
  background-color: #ffffff;
  --color: #000000;
  font-family: inherit;
  display: inline-block;
  width: 8em;
  height: 2.6em;
  line-height: 2.5em;
  margin: 20px;
  position: relative;
  cursor: pointer;
  overflow: hidden;
  border: 2px solid var(--color);
  transition: color 0.5s;
  z-index: 1;
  font-size: 17px;
  border-radius: 6px;
  font-weight: 500;
  color: var(--color);
  text-align: center;
}

.btn-17:before {
  content: "";
  position: absolute;
  z-index: -1;
  background: var(--color);
  height: 150px;
  width: 200px;
  border-radius: 50%;
}

.btn-17:hover {
  color: #fff;
}

.btn-17:before {
  top: 100%;
  left: 100%;
  transition: all 0.7s;
}

.btn-17:hover:before {
  top: -30px;
  left: -30px;
}

.btn-17:active:before {
  background: #000000;
  transition: background 0s;
}
      </style>
   <img src="/a.webp" alt="Profile Image" height="100" width="100" style="border-radius: 50%; margin-bottom: 1rem;">
   <p style="line-height: 0;">Halo, {{ auth()->user()->name }}!</p>
   <p>Ini adalah halaman akun kamu. Di sini kamu bisa melihat koleksi buku yang sudah kamu miliki, dan juga menghapus akun jika kamu ingin. Jika kamu ingin melihat koleksi buku kamu, klik tombol di bawah ini:</p>
   <div style="display: inline-flex; align-items: center; gap: 0.5rem;">
       <a href="wallet" class="btn-17">Dompet</a>
      <a href="unpaid-invoice" class="btn-17">Tagihan</a>
      <a href="library" class="btn-17">Lihat Koleksi Saya</a>
      <button class="btn-17" type="button" wire:click="deleteAccount">Hapus Akun</button>
   </div>
   <p style=" color: red;">Peringatan: Menghapus akun akan menghapus semua data kamu, termasuk koleksi buku yang sudah kamu miliki. Pastikan kamu yakin sebelum melanjutkan.</p>

<p>Fitur ini masih dalam pengembangan.</p>
<p>HARUSNYA aku pakai jetstream, tapi belum sempat.</p>
</x-filament-panels::page>
