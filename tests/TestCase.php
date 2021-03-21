<?php

namespace Babak271\SharedHostArtisanCommand\Tests;

use Babak271\SharedHostArtisan\SharedHostArtisanServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            SharedHostArtisanServiceProvider::class,
        ];
    }
}
