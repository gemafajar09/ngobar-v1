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
- lakukan generate key project
```
php artisan key:generate
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
