# Laravel Youzan

Youzan wrapper for Laravel.

## Installing

1. require package.
```shell
$ composer require overtrue/laravel-youzan -vvv
```

2. config you apps 

```php
$ ./artisan vendor:publish 
# select Overtrue\LaravelYouzan\YouzanServiceProvider and enter.
```

Edit the `config/youzan.php` with right content.

## Usage

1. Use Facade

```php
# default app
Youzan::post('youzan.shop.create', ['name' => 'Test store']);

# specify app name
Youzan::app('pet-store')->get('youzan.trade.get', ['tid' => 'xxxxxxx']);
```

2. Use `app()` function helper.

```php
# default app
app('youzan')->post('youzan.shop.create', ['name' => 'Test store']);

# specify app name
app('youzan')->app('pet-store')->get('youzan.trade.get', ['tid' => 'xxxxxxx']);
```

[More usage](https://github.com/overtrue/youzan)

## License

MIT
