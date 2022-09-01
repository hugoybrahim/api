<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Version

This application is created in laravel `9.27.0`


## Api Installation
1. Clone repository.
2. Locate in the folder where the api is located in this case api-requirements.
3. This must have a php version higher than `8.0.2`.
4. Type in the `CLI` located in the app folder, `composer install` (must have composer installed)
5. Run in `CLI`: `php artisan serve`
6. Proceed to test api from your agent of choice.

## Instructions For Use

Once in the agent, the Url 
```text
http://localhost:8000/api/products 
```
is required to perform the request.

In case of filters would be category and price, as follows:

```text
http://localhost/api/products?category=category_to_be_filtered
```
```text
http://localhost/api/products?price=price_to_be_filtered
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
