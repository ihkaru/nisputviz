
## Requirement
- PHP 8.0+
- Postgresql 9.5+
- Node 16.15.1+
- Composer
- NPM
- extensi `pdo_pgsql` pada `pgsql` pada `php.ini`, dapat ikuti tutorial [ini](https://tonyfrenzy.medium.com/using-postgresql-with-laravel-c4c320ca7f34)

## Cara Install
- Install sesuai requirement yang ada jika belum ada
- Jalankan `composer install` pada terminal
- Jalankan `npm install` pada terminal
- Buat file `.env` berdasarkan isi dari file `.env.example`
- Sesuaikan `DB_HOST`, `DB_USERNAME`, `DB_DATABASE`, `DB_PASSWORD`, `DB_PORT` dengan yang ada di lokal masing-masing (instal postgres dan buat databasenya jika belum). Keempat field tersebut ditentukan saat menginstall postgresql di lokal. Nilai default sesuai dengan yang ada pada `.env.example`. Sedangkan `DB_DATABASE` harus dibuat sendiri terlebih dahulu dengan nama database default `nisputviz`.
- Jalankan `php artisan migrate:fresh --seed` pada terminal
- Jalankan `php artisan key:generate`
- jalankan `npx @preset/cli apply laravel:vite` pada terminal
- Jalankan `php artisan serve` untuk menyalakan server
- Buka url `http://localhost:8000/admin/login`
- Login dengan `admin@example.com` dan password `password123`

## Setiap Ada Commit Migration/Seeder/Dependency Baru
- Jalankan `composer install` pada terminal 
- Jalankan `php artisan migrate:fresh --seed` pada terminal 
