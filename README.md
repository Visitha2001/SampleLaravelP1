<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## commands

- to create migration tables
```php artisan migrate```

- to drop migration table
```php artisan migrate:rollback```

- to make models with artisan
```sh php artisan make:model Ninja -mfs```

- to access php(laravel) in shell
```php artisan tinker```

- to drop all tables and get a fresh start
```php artisan migrate:fresh --seed```

- to start project
```php artisan serve```

- to start project with tailwind
```npm run dev```

- to clear cache/routes/compile
```php artisan optimize:clear```

- to run a specific seeder for add some fake data
```php artisan db:seed --class=SeederClassName```