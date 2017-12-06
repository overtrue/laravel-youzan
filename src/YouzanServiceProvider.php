<?php

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
            __DIR__.'/config.php' => config_path('youzhan.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton(Manager::class, function ($app) {
            return new Manager();
        });

        $this->app->alias(Manager::class, 'payment');
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [Manager::class, 'payment'];
    }
}