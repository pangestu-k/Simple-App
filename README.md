<h1>E L E K U</h1>

## Detail Aplikasi

Sebuah Aplikasi Managemen Toko Elektronik.

<h3>Tata Cara Install 🌱</h3> 

- composer install
- copy file .env.example lalu ubah menjadi .env / gunakan perintah cp .env.example .env
- php artisan key:generate 
- Buat Database di mysql atau postgree (postgree ada konfigurasi sendiri)
- Tulis nama Database di file .env (sesuaikan dengan nama db yg dibuat)
- php artisan storage:link
    
    <br>
    
    <h3>Jika Menggunakan mysql</h3> 

    <p>DB_CONNECTION=mysql</p>
    <p>DB_HOST=127.0.0.1</p>
    <p>DB_PORT=3306</p>
    <p>DB_DATABASE=db_laravel_produk</p>
    <p>DB_USERNAME=root</p>
    <p>DB_PASSWORD=</p>
    
    <br>
    
    <h3>Jika Menggunakan pgsql (postgre)</h3> 

    <p>DB_CONNECTION=pgsql</p>
    <p>DB_HOST=127.0.0.1</p>
    <p>DB_PORT=5432</p>
    <p>DB_DATABASE=db_laravel_produk</p>
    <p>DB_USERNAME=postgres</p>
    <p>DB_PASSWORD=root</p>
    
    <br>

- php artisan migrate --seed
- php artisan serve

    <br>
    

<h6 class="text-gray">Email (admin) : admin@gmail.com</h6>
<h6 class="text-gray">Password	    : password</h6>

 <br>


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
