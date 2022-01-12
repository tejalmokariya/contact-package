<?php

namespace mydata\contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ .'/views','contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        /**Not Working dynamic mail */
        // $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact');
        // $this->publishes([
        //     __DIR__.'/config/contact.php' => config_path('contact.php'),
        //   ], 'config');
    }

    public function register()
    {

    }
}
