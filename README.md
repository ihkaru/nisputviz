
## Requirement
- PHP 8.0+
- Postgresql 9.5+
- extensi `pdo_pgsql` pada `pgsql` pada `php.ini`, dapat ikuti tutorial [ini](https://tonyfrenzy.medium.com/using-postgresql-with-laravel-c4c320ca7f34)

## Cara Install
- Install sesuai requirement yang ada jika belum ada
- Jalankan `composer install` pada terminal
- Buat file `.env` berdasarkan isi dari file `.env.example`
- Sesuaikan `DB_HOST`, `DB_USERNAME`, `DB_PASSWORD`, `DB_PORT` dengan yang ada di lokal masing-masing
- Jalankan `php artisan migrate:fresh --seed` pada terminal
- Jalankan `php artisan key:generate`
- Jalankan `php artisan serve` untuk menyalakan server
