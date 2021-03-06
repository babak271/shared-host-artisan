<?php

namespace Babak271\SharedHostArtisan;

use Illuminate\Support\Facades\Route;
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
        $this->mergeConfigFrom(__DIR__ . '/../config/share_host_artisan.php', 'share_host_artisan');
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'shared_host_artisan');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'shared_host_artisan');
        $this->registerRoutes();

        $this->publishes([
            __DIR__ . '/../resources/views'               => $this->app->basePath('resources/views/vendor/shared-host-artisan'),
            __DIR__ . '/../resources/lang'                => $this->app->basePath('resources/lang/vendor/shared-host-artisan'),
            __DIR__ . '/../config/share_host_artisan.php' => $this->app->basePath('config/share_host_artisan.php'),
        ]);
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix'     => config('share_host_artisan.prefix'),
            'middleware' => config('share_host_artisan.middleware'),
        ];
    }
}
