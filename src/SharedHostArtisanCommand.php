<?php

namespace Babak271\SharedHostArtisan;

use Artisan;

class SharedHostArtisanCommand
{
    public function clearCache()
    {
        return Artisan::call('cache:clear');
    }

    public function clearRoute()
    {
        return Artisan::call('route:clear');
    }

    public function cacheRoute()
    {
        return Artisan::call('route:cache');
    }

    public function clearView()
    {
        return Artisan::call('view:clear');
    }

    public function cacheView()
    {
        return Artisan::call('view:cache');
    }

    public function cacheConfig()
    {
        return Artisan::call('config:cache');
    }

    public function clearConfig()
    {
        return Artisan::call('config:clear');
    }
}