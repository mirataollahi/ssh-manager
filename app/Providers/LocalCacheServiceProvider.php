<?php

namespace App\Providers;

use App\Facades\LocalCacheFacade;
use App\Services\Cache\LocalCacheService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class LocalCacheServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        App::bind('LocalCache',function() {
            return LocalCacheService::getInstance();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
