# Treblle API Tools (Laravel)

[![Latest Version](https://img.shields.io/packagist/v/treblle/treblle-api-tools-laravel)](https://packagist.org/packages/treblle/treblle-api-tools-laravel)
[![PHP Version](https://img.shields.io/packagist/php-v/treblle/treblle-api-tools-laravel.svg?style=flat-square)](https://php.net)
[![Tests](https://github.com/treblle/treblle-api-tools-laravel/actions/workflows/tests.yml/badge.svg)](https://github.com/treblle/treblle-api-tools-laravel/actions/workflows/tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/treblle/treblle-api-tools-laravel)](https://packagist.org/packages/treblle/treblle-api-tools-laravel)
[![MIT Licence](https://img.shields.io/packagist/l/treblle/treblle-api-tools-laravel)](LICENSE)

Treblle makes it super easy to understand what’s going on with your APIs and the apps that use them. Just by adding
Treblle to your API out of the box you get:

* Real-time API monitoring and logging
* Auto-generated API docs with OAS support
* API analytics
* Quality scoring
* One-click testing
* API management on the go
* Supports Laravel Vapor and Laravel Octane
* and more...


A set of useful tools for building APIs in Laravel.

## Requirements

* PHP 8.2+
* Laravel 10+

## Installation

```bash
composer require treblle/treblle-api-tools-laravel
```

## Usage

### Headers

#### Authorization

You can use the Authorization Header can be used like the following:

```php
use Treblle\Tools\Http\Enums\Headers\AuthScheme;
use Treblle\Tools\Http\Headers\Authorization;

$auth = new Authorization(
    type: AuthScheme::BEARER,
    credentials: 'YOUR_API_TOKEN_HERE',
);

// Turn the header into an array
$array = $auth->toArray();
//[
//    'type' => AuthScheme::BEARER,
//    'credentials' => 'YOUR_API_TOKEN_HERE'
//]

// Turn the header into a header
$header = $auth->toHeader();
//[
//    'Authorization' => 'Bearer YOUR_API_TOKEN_HERE',
//]
```

## Support

If you have problems of any kind feel free to reach out via <https://treblle.com> or email hello@treblle.com, and we'll
do our best to help you out.

## License

Copyright 2022., Treblle Limited. Licensed under the MIT license:
http://www.opensource.org/licenses/mit-license.php
