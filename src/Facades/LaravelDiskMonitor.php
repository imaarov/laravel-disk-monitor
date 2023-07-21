<?php

namespace Imaarov\LaravelDiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Imaarov\LaravelDiskMonitor\LaravelDiskMonitor
 */
class LaravelDiskMonitor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Imaarov\LaravelDiskMonitor\LaravelDiskMonitor::class;
    }
}
