<?php

namespace Babak271\SharedHostArtisan;

use Illuminate\Support\Facades\Facade;

/**
 * Class SharedHostArtisan
 * @package Babak271\SharedHostArtisan
 * @method static int clearCache()
 * @method static int clearRoute()
 * @method static int cacheRoute()
 * @method static int clearView()
 * @method static int cacheView()
 * @method static int cacheConfig()
 * @method static int clearConfig()
 */
class SharedHostArtisan extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shared_host_artisan';
    }
}
