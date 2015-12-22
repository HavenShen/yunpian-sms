<?php

namespace HavenShen\YunpianSMS;

use HavenShen\YunpianSMS\Services\YunpianSMSService;
use Illuminate\Support\ServiceProvider;

class YunpianSMSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/yunpian.php' => base_path('config/yunpian.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('YunpianSMSService', function($app){
            return new YunpianSMSService();
        });
    }
}
