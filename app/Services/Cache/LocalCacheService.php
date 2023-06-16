<?php

namespace App\Services\Cache;

use Illuminate\Support\Facades\Cache;

class LocalCacheService
{
    public static LocalCacheService $instance;
    private function __construct()
    {
        //
    }

    /**
     * @return LocalCacheService
     */
    public static function getInstance(): LocalCacheService
    {
        if (!isset(self::$instance))
            self::$instance = new LocalCacheService();

        return self::$instance;
    }

    /**
     * @param string $key
     * @param \Closure $callback
     * @return mixed
     */
    public function get(string $key , \Closure $callback): mixed
    {
        return Cache::rememberForever( $key , function () use ($callback) {
           return call_user_func($callback);
        });
    }
}
