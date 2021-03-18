<?php

namespace Babak271\SharedHostArtisan;

use Illuminate\Support\ServiceProvider;

class SharedHostArtisanServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'shared_host_artisan');

        $this->publishes([
            __DIR__ . '/../resources/views' => $this->app->basePath('resources/views/vendor/shared-host-artisan'),
        ]);
        $this->publishes([
            __DIR__ . '/../config/share_host_artisan.php' => $this->app->basePath('config/share_host_artisan.php'),
        ]);
    }
}