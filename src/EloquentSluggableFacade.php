<?php

namespace Laltu\EloquentSluggable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\EloquentSluggable\Skeleton\SkeletonClass
 */
class EloquentSluggableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'eloquent-sluggable';
    }
}
