<?php

namespace Larswiegers\LoadTesting;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Larswiegers\LoadTesting\Skeleton\SkeletonClass
 */
class LoadTestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'load-test';
    }
}
