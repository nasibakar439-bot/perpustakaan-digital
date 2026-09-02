# 📚 Perpustakaan Digital (Digital Library)

Aplikasi Web **Sistem Informasi Perpustakaan Digital** berbasis framework **Laravel** yang dirancang untuk memudahkan pengelolaan koleksi buku, data anggota, serta transaksi peminjaman dan pengembalian buku secara mandiri oleh siswa.

---

## ✨ Fitur Utama

### 👨‍💼 Panel Admin
* **Dashboard Admin**: Ringkasan data sistem perpustakaan.
* **Kelola Data Buku (CRUD)**: Tambah, lihat, edit, dan hapus data buku (Judul, Pengarang, Penerbit, Stok, Kode Buku).
* **Kelola Anggota / User (CRUD)**: Kelola data pengguna/siswa serta hak akses (admin/user).
* **Kelola Peminjaman**: Memantau daftar peminjaman buku dan memperbarui status pengembalian.

### 👨‍🎓 Panel Siswa (User)
* **Katalog Buku Tersedia**: Melihat daftar semua buku yang siap dipinjam beserta informasi stok real-time.
* **Peminjaman Buku Mandiri**: Meminjam buku langsung dari sistem dengan batas durasi pengembalian otomatis.
* **Riwayat Peminjaman Saya**: Melihat daftar buku yang sedang dipinjam dan riwayat buku yang sudah dikembalikan.
* **Pengembalian Buku Mandiri**: Fitur untuk mengembalikan buku yang dipinjam langsung melalui halaman dashboard siswa.

---

## 🛠️ Persyaratan Sistem

Sebelum menjalankan aplikasi ini, pastikan sistem Anda sudah terinstall:
* **PHP** >= 8.2
* **Composer** >= 2.0
* **Node.js** >= 18.x & NPM
* **Database Engine** (MySQL / MariaDB)

---

## 🚀 Langkah Instalasi & Cara Penggunaan

Ikuti langkah-langkah berikut untuk menjalankan project ini di komputer lokal Anda:

### 1. Clone Repositori
```bash
git clone [https://github.com/yell0owruthy/Perpustakaan-Digital.git](https://github.com/yell0owruthy/Perpustakaan-Digital.git)
cd Perpustakaan-Digital
```

### 2. Install Dependensi PHP & JavaScript
```bash
composer install
npm install
```

### 3. Konfigurasi File .env
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```
Buka file `.env` dan sesuaikan pengaturan database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=peminjamanbuku
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Migrasi & Seeder Database
Jalankan migrasi tabel ke database beserta data awal:
```bash
php artisan migrate --seed
```

### 6. Jalankan Server Lokal
Jalankan dev server Laravel dan Vite (Asset Bundler) secara bersamaan:

**Terminal 1 (Laravel Server):**
```bash
php artisan serve
```

**Terminal 2 (Vite Asset Server):**
```bash
npm run dev
```

Akses aplikasi di browser melalui URL: `http://127.0.0.1:8000`

---

## 💻 Panduan Alur Penggunaan Aplikasi

1. **Registrasi / Login**: Pengguna dapat membuat akun baru atau login menggunakan akun yang sudah terdaftar.
2. **Meminjam Buku (User/Siswa)**:
   * Masuk ke menu Dashboard / Katalog.
   * Pilih buku yang ingin dipinjam pada tabel **Katalog Buku Tersedia**, lalu klik tombol **Pinjam**.
   * Buku akan secara otomatis masuk ke tabel **Riwayat Peminjaman Buku Saya** dan stok buku berkurang.
3. **Mengembalikan Buku (User/Siswa)**:
   * Pada tabel **Riwayat Peminjaman Buku Saya**, klik tombol **Kembalikan** pada buku yang ingin dikembalikan.
   * Status peminjaman berubah menjadi **Dikembalikan** dan stok buku otomatis bertambah kembali.
4. **Kelola Sistem (Admin)**: Akses `/admin/dashboard` untuk mengelola data buku, pengguna, dan transaksi peminjaman secara menyeluruh.

---

## 📝 Lisensi

Project ini dibuat untuk kebutuhan pembelajaran dan pengembangan aplikasi web dengan Laravel Framework.
