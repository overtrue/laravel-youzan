<?php

/*
 * This file is part of the overtrue/laravel-youzan.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\LaravelYouzan;

use Illuminate\Support\Facades\Facade;

/**
 * Class Youzan.
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
