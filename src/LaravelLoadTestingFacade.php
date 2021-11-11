<?php

namespace Larswiegers\LaravelLoadTesting;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Larswiegers\LaravelLoadTesting\Skeleton\SkeletonClass
 */
class LaravelLoadTestingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-load-testing';
    }
}
