<?php

namespace Towoju5\ReloadlyDataAirtime;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Towoju5\ReloadlyDataAirtime\Skeleton\SkeletonClass
 */
class ReloadlyDataAirtimeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'reloadly';
    }
}
