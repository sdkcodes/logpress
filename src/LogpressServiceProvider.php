<?php

namespace Sdkcodes\Logpress;

use Illuminate\Support\ServiceProvider;

class LogpressServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/config/logpress.php", "logpress");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__."/config/logpress.php" => config_path('logpress.php')
        ], 'config');
        
    }
}
