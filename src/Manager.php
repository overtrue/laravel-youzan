<?php

namespace Overtrue\LaravelYouzan;

use \Hanson\Youzan\Youzan;
use Overtrue\Youzan\Client;

/**
 * Class Manager
 */
class Manager
{
    /**
     * Manager constructor.
     */
    public function __construct()
    {
        $baseConfig = config('youzan.base');
        foreach (config('youzan.apps') as $name => $config) {
            app()->singleton('youzan.'.$name, function() use ($config, $baseConfig) {
                $config = array_merge($baseConfig, $config);

                return new Client($config['client_id'], $config['client_secret'], $config['kdt_id'], $config);
            });
        }
    }

    /**
     * @param  string $name
     *
     * @return \Overtrue\Youzan\Client
     */
    public function app(string $name)
    {
        if (empty(config('youzan.apps.'.$name))) {
            throw new Exception(sprintf("No youzan app named '%s' found.", $name));
        }

        return app('youzan.'.$name);
    }

    /**
     * @param string $method
     * @param array  $args
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array([app('youzan.'.config('youzan.default_app')), $method], $args);
    }
}