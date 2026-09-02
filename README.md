# 📚 Aplikasi Peminjaman Perpus Digital

Aplikasi web berbasis Laravel yang dirancang untuk mengelola sistem perpustakaan digital secara praktis, mulai dari manajemen data buku, anggota, hingga pencatatan transaksi peminjaman.

## 🚀 Fitur Utama
* **Administrator**: 
  * CRUD Data Buku Perpustakaan.
  * Pencatatan dan pengelolaan transaksi Peminjaman & Pengembalian buku.
  * Kontrol stok buku otomatis.
* **Siswa / User**: 
  * Akses katalog buku secara *real-time*.
  * Peminjaman buku mandiri dan pemantauan riwayat transaksi.

## 🛠️ Teknologi yang Digunakan
* **Framework**: Laravel 
* **Frontend**: Laravel Breeze & Tailwind CSS
* **Database**: MySQL (XAMPP)

## ⚙️ Cara Instalasi
1. *Clone repository* ini ke komputer lokal lu.
2. Buka terminal di folder project, lalu jalankan `composer install`.
3. Salin file `.env.example` menjadi `.env` lalu sesuaikan konfigurasi database (`db_perpus_digital`).
4. Jalankan perintah `php artisan key:generate`.
5. Lakukan migrasi database dan *seeder*: 
   ```bash
   php artisan migrate --seed
