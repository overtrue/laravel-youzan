<?php

namespace Overtrue\LaravelYouzan;

use \Hanson\Youzan\Youzan;

/**
 * Class Manager
 */
class Manager
{
    public function __construct()
    {
        $baseConfig = config('youzan.base');
        foreach (config('youzan.apps') as $name => $config) {
            app()->singleton($name, function() use ($config) {
                return new Youzan(array_merge($baseConfig, $config));
            });
        }
    }

    /**
     * @param  string $name
     *
     * @return \Hanson\Youzan\Youzan
     */
    public function app(string $name)
    {
        if (!isset(config('youzan.apps.'.$name))) {
            throw new Exception(sprintf("No youzan app named '%s' found.", $name));
        }

        return app('youzan.'.$name);
    }

    public function __call($method, $args)
    {
        return call_user_func_array(app('youzhan.'.config('youzhan.default_app')), $args);
    }
}