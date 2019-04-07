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

## PHP 扩展包开发

> 想知道如何从零开始构建 PHP 扩展包？
>
> 请关注我的实战课程，我会在此课程中分享一些扩展开发经验 —— [《PHP 扩展包实战教程 - 从入门到发布》](https://learnku.com/courses/creating-package)

## License

MIT
