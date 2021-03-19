<?php

namespace Babak271\SharedHostArtisan;

use Artisan;
use Illuminate\Support\Facades\Response;

class SharedHostArtisanCommand
{
    const TRANSLATION_FILE_NAME = 'text';

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
     * @param string $trans_key associated translation key.
     * @return \Illuminate\Http\JsonResponse
     */
    protected function generateSuccessResponse($trans_key)
    {
        return Response::json(['message' => __('shared_host_artisan::' . self::TRANSLATION_FILE_NAME . '.' . $trans_key)]);
    }

    /**
     * Get index of shared host artisan commands.
     *
     * @return mixed
     */
    public function index()
    {
        return view('shared_host_artisan::index');
    }

    /**
     * Run clear cache artisan command.
     *
     * @return ?\Illuminate\Http\JsonResponse
     */
    public function clearCache()
    {
        if ($this->execArtisanCall('cache:clear') == 0) {
            return $this->generateSuccessResponse('successful_clear_cache');
        }
        return null;
    }

    /**
     * Run clear route artisan command.
     *
     * @return ?\Illuminate\Http\JsonResponse
     */
    public function clearRoute()
    {
        if ($this->execArtisanCall('route:clear') == 0) {
            return $this->generateSuccessResponse('successful_clear_route');
        }
        return null;
    }

    /**
     * Run route cache artisan command.
     *
     * @return ?\Illuminate\Http\JsonResponse
     */
    public function cacheRoute()
    {
        if ($this->execArtisanCall('route:cache') == 0) {
            return $this->generateSuccessResponse('successful_cache_route');
        }
        return null;
    }

    /**
     * Run clear view artisan command.
     *
     * @return ?\Illuminate\Http\JsonResponse
     */
    public function clearView()
    {
        if ($this->execArtisanCall('view:clear') == 0) {
            return $this->generateSuccessResponse('successful_clear_view');
        }
        return null;
    }

    /**
     * Run view cache artisan command.
     *
     * @return int
     */
    public function cacheView()
    {
        if ($this->execArtisanCall('view:cache') == 0) {
            return $this->generateSuccessResponse('successful_cache_view');
        }
        return null;
    }

    /**
     * Run config cache artisan command.
     *
     * @return int
     */
    public function cacheConfig()
    {
        if ($this->execArtisanCall('config:cache') == 0) {
            return $this->generateSuccessResponse('successful_clear_config');
        }
        return null;
    }

    /**
     * Run config cache artisan command.
     *
     * @return int
     */
    public function clearConfig()
    {
        if ($this->execArtisanCall('config:clear') == 0) {
            return $this->generateSuccessResponse('successful_cache_config');
        }
        return null;
    }
}
