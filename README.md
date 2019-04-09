# Laravel Youzan

Youzan wrapper for Laravel.

> 🚧警告！此 SDK 目前仅支持自用型应用，不支持其它类型的应用接入。 由于有赞的不人道的 996 策略，以及在没有通知用户的情况下关闭了个人收款渠道，现决定不再维护他们家任何相关 SDK，谢谢！

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
