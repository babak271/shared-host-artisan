<?php

namespace Babak271\SharedHostArtisan;

use Artisan;

class SharedHostArtisanCommand
{
    /**
     * Handle artisan command calls.
     *
     * @param $command
     * @return int
     */
    private function execArtisanCall($command)
    {
        return Artisan::call($command);
    }

    /**
     * Run clear cache artisan command.
     *
     * @return int
     */
    public function clearCache()
    {
        return $this->execArtisanCall('cache:clear');
    }

    /**
     * Run clear route artisan command.
     *
     * @return int
     */
    public function clearRoute()
    {
        return $this->execArtisanCall('route:clear');
    }

    /**
     * Run route cache artisan command.
     *
     * @return int
     */
    public function cacheRoute()
    {
        return $this->execArtisanCall('route:cache');
    }

    /**
     * Run clear view artisan command.
     *
     * @return int
     */
    public function clearView()
    {
        return $this->execArtisanCall('view:clear');
    }

    /**
     * Run view cache artisan command.
     *
     * @return int
     */
    public function cacheView()
    {
        return $this->execArtisanCall('view:cache');
    }

    /**
     * Run config cache artisan command.
     *
     * @return int
     */
    public function cacheConfig()
    {
        return $this->execArtisanCall('config:cache');
    }

    /**
     * Run config cache artisan command.
     *
     * @return int
     */
    public function clearConfig()
    {
        return $this->execArtisanCall('config:clear');
    }
}
