<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class LocalCacheFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'LocalCache';
    }
}
