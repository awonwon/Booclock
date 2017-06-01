<?php

namespace Awonwon\Booclock;

use Illuminate\Support\ServiceProvider;

class ClockServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'booclock');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/booclock'),
        ]);
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/booclock'), ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
