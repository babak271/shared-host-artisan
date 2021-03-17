<?php

namespace Babak271\SharedHostArtisan;

use Illuminate\Support\Facades\Facade;

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