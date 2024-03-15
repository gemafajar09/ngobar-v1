<center><b>NGOBAR V1</b></center>

KEBUTUHAN
```
- PHP v 8.2
- composer
```

pertemuan 1. 
auth guard dan laravel cache
- installsai
```
composer create-project laravel/laravel:^10.0 ngobar
```
- untuk melihat semua perintah pada artisan
```
php artisan list
```
- buka project ngobar
```
cd ngobar
```

- silakan install composer agar file vendor dibuild kedalam project
```
composer install --no-dev
```
 - buatlah database dengan nama ngobar
- pastikan file .env ada pada project jika tidak silahkan buat file dengan nama .env dan copy file .env.example
- seteleah file .env telah ada maka lakukan configurasi database. cek pada line 11. dan silahkan samakan file sebagai berikut
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ngobar
DB_USERNAME=root
DB_PASSWORD=
```
- jika sudah jalan perintah generate key
```
php artisan key:generate
```


- jika sudah maka jalanakan perintah
```
php artisan migrate
```
- buatlah sebuah controller dengan perintah
```
php artisan make:controller LoginController
```
- jika controller sudah di buat maka buatlah view login
```
php artisan make:view frontend/auth/login
```
- buatlah logic untuk auth dengan guard pada controller Login
```
silahkan cek pada App\Http\Controllers\LoginController.php
```
- buatlah validasi dengan perintah
```
php artisan make:request LoginRequest
```
- file request tadi akan berada pada file
```
App\Http\Request\LoginRequest
```
- untuk alamat email dan password silahkan masukan manual terlebuh dahulu kedalam database. dan password harus berupa hash.

Pertemuan 2.
register dan validation
- buatlah sebah file view untuk register
```
php artisan make:view frontend/auth/register
```
- inport package Auth dan Hash kedalam file controller tempat logic auth berada
```
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
```
