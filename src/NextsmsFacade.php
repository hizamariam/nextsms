<?php

namespace Hizamariam\Nextsms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hizamariam\Nextsms\Skeleton\SkeletonClass
 */
class NextsmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nextsms';
    }
}
