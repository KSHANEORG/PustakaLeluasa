# PustakaLeluasa
> [!NOTE]
> Tidak sesuai dengan standar komersil, masih WIP!

PustakaLeluasa adalah proyek uji coba berbasis Laravel untuk simulasi platform katalog dan koleksi buku. Aplikasi ini sudah mencakup fitur dasar seperti autentikasi, detail buku, koleksi pengguna, kategori, seeder data, serta panel Filament untuk pengelolaan.

## Fitur-Fitur
- Autentikasi pengguna (login dan registrasi).
- Halaman detail buku.
- Penambahan buku ke koleksi pribadi.
- Daftar koleksi milik pengguna.
- Pengelompokan buku berdasarkan kategori.
- Seeder data awal untuk pengujian.
- Panel admin berbasis Filament.

## Status Proyek Saat Ini
- Masih dalam tahap pengembangan aktif (WIP).
- Fitur inti aplikasi sudah mulai terbentuk dan dapat dijalankan secara lokal.
- Struktur backend, migrasi database, relasi model, dan sebagian antarmuka sudah tersedia.
- Belum ditujukan untuk penggunaan produksi atau standar komersial.

## Jalankan Proyek
- composer install
- npm install
- npm run build
- php artisan key:generate
- php artisan migrate
- php artisan migrate --seed
- npm run dev && php artisan serve
