<?php

namespace Overtrue\LaravelYouzan;

use Illuminate\Support\Facades\Facade;

/**
 * Class Youzan
 *
 * @author overtrue <i@overtrue.me>
 */
class Youzan extends Facade
{
    public static function getFacadeAccessor()
    {
        return Manager::class;
    }

    public static function app($name)
    {
        return app('youzan')->app($name);
    }
}