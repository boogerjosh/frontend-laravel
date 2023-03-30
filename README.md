# Panduan instalasi

Berikut adalah panduan instalasi untuk web aplikasi frontend-laravel setelah berhasil melakukan cloning repository:

- Pastikan Anda sudah menginstal **Composer**, **Node.js**, di komputer Anda.
- Buka terminal dan arahkan ke direktori di mana Anda ingin mengekstrak repository.
- Clone repository dengan menjalankan perintah git clone https://github.com/boogerjosh/frontend-laravel.git.
- Masuk ke direktori aplikasi dengan menjalankan perintah `cd frontend-laravel`.
- Jalankan perintah `composer install` untuk menginstal semua dependensi PHP.
- Salin file `.env.example` ke `.env` dengan menjalankan perintah `cp .env.example .env` (untuk pengguna Windows, gunakan perintah `copy .env.example .env`).
- Jalankan perintah `php artisan key:generate` untuk menghasilkan kunci aplikasi.
- Jalankan perintah `npm install` untuk menginstal semua dependensi **Node.js**.
- Jalankan perintah `npm run dev` untuk mengkompilasi aset aplikasi.
- Jalankan perintah `php artisan serve` untuk menjalankan server lokal dan mengakses aplikasi di browser dengan URL http://localhost:8000.

Sekarang, aplikasi frontend-laravel sudah terinstal dan dapat diakses di browser Anda.
