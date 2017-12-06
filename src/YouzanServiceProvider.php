<?php

namespace Overtrue\LaravelYouzan;

use Illuminate\Support\ServiceProvider;

/**
 * Class YouzanServiceProvider
 */
class YouzanServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('youzan.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton(Manager::class, function ($app) {
            return new Manager();
        });

        $this->app->alias(Manager::class, 'youzan');
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [Manager::class, 'youzan'];
    }
}