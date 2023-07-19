# Responsive Images Demo

Proyek demo untuk memperlihatkan implementasi pembuatan gambar responsif menggunakan paket Laravel Media Library dari Spatie.

## Persyaratan

Untuk menjalankan proyek Responsive Images Demo, pastikan Anda telah menginstal prasyarat berikut:

- PHP (versi 8.1 atau lebih tinggi)
- PHP Extensions: exif, gd
- Composer

## Instalasi

Ikuti langkah-langkah ini untuk menginstal dan menyiapkan proyek:

1. Clone repositori proyek:

```bash
git clone https://github.com/Buatin-Website/responsive-images-demo.git
```

2. Masuk ke direktori proyek:

```bash
cd responsive-images-demo
```

3. Install dependensi proyek menggunakan Composer:

```bash
composer install
```

4. Atur konfigurasi database dengan membuat file `.env`:

```bash
cp .env.example .env
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Konfigurasikan koneksi database di file `.env` dengan menggunakan kredensial Anda.

7. Jalankan migrasi database:

```bash
php artisan migrate
```

8. Mulai server pengembangan lokal:

```bash
php artisan serve
```

9. Kunjungi `http://localhost:8000` pada browser Anda untuk mengakses Responsive Images Demo.

## Penggunaan

1. Daftar atau masuk ke aplikasi.
2. Akses halaman `Post`.
3. Isi form yang tersedia.
4. Gambar yang diunggah akan secara otomatis menghasilkan gambar dengan ukuran dan dioptimalkan untuk berbagai ukuran layar.

## Kontribusi

Kontribusi untuk proyek Responsive Images Demo sangat diterima dan didorong! Jika Anda ingin berkontribusi, ikuti panduan berikut:

1. Fork repositori.
2. Buat branch baru untuk kontribusi Anda.
3. Lakukan perubahan dan commit.
4. Push perubahan Anda ke repositori yang telah Anda fork.
5. Ajukan pull request yang menjelaskan perubahan yang Anda buat.

## Lisensi

Proyek Responsive Images Demo bersifat open-source dan dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

## Penghargaan

Proyek Responsive Images Demo menggunakan perpustakaan dan kerangka kerja open-source berikut:

- Laravel - [https://laravel.com](https://laravel.com)
- Laravel Media Library oleh Spatie - [https://github.com/spatie/laravel-medialibrary](https://github.com/spatie/laravel-medialibrary)

## Kontak

Untuk pertanyaan atau dukungan terkait proyek Responsive Images Demo, silakan hubungi [mailto:tolong@buatin.website](tolong@buatin.website).
