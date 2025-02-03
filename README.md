# Tutorial
Tutorial from [here](https://laravel-news.com/building-your-own-laravel-packages).

## Installation

```bash
composer require ivansabat/laravel-data-object-tools
```

## Usage

```bash
php artisan make:dto MyDto
```

## Possible errors

#### Could not find a version of package ivansabat/laravel-data-object-tools matching your minimum-stability (stable). Require it with an explicit version constraint allowing its desired stability.

### Solution

```bash
composer config minimum-stability dev
composer config prefer-stable true
```
 