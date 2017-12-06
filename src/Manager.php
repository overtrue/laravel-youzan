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
            app()->singleton('youzan.'.$name, function() use ($config, $baseConfig) {
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
        if (empty(config('youzan.apps.'.$name))) {
            throw new Exception(sprintf("No youzan app named '%s' found.", $name));
        }

        return app('youzan.'.$name);
    }

    public function __call($method, $args)
    {
        return call_user_func_array([app('youzan.'.config('youzan.default_app')), $method], $args);
    }
}