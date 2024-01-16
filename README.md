# Laravel Blog

Ini adalah proyek **Laravel Blog** yang sederhana dan dapat disesuaikan untuk membuat blog pribadi atau perusahaan Anda. Proyek ini menggunakan Laravel sebagai kerangka kerja utama.

## Fitur

-   Tampilan Halaman Beranda
-   Penulisan dan Pengelolaan Posting Blog
-   Komentar Pengguna
-   Pengelolaan Kategori dan Tag
-   Formulir Kontak untuk Interaksi Pengguna
-   Tampilan Responsif untuk Perangkat Seluler
-   Integrasi dengan Laravel Passport untuk Otentikasi API (opsional)
-   Dan masih banyak lagi...

## Persyaratan

-   PHP >= 8.1
-   Composer
-   Laravel >= 10.x
-   MySQL atau Database Lainnya

## Panduan Instalasi

1. Clone repositori ini ke komputer Anda:

    ```bash
    git clone https://github.com/Skrnagrh/laravel-blog.git
    ```

2. Masuk ke direktori proyek:

    ```bash
    cd laravel-blog
    ```

3. Salin file `.env.example` menjadi `.env`:

    ```bash
    cp .env.example .env
    ```

4. Konfigurasi file `.env` sesuai dengan pengaturan database Anda.

5. Jalankan perintah berikut untuk menginstal dependensi:

    ```bash
    composer install
    ```

6. Jalankan perintah berikut untuk menghasilkan kunci aplikasi:

    ```bash
    php artisan key:generate
    ```

7. Jalankan migrasi untuk membuat tabel-tabel yang diperlukan:

    ```bash
    php artisan migrate
    ```

8. (Opsional) Jalankan perintah berikut jika Anda menggunakan Laravel Passport:

    ```bash
    php artisan passport:install
    ```

9. Jalankan server pengembangan:

    ```bash
    php artisan serve
    ```

10. Buka aplikasi di browser Anda dengan mengunjungi `http://localhost:8000`.
