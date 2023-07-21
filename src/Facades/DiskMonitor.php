<?php

namespace Imaarov\DiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Imaarov\DiskMonitor\DiskMonitor
 */
class DiskMonitor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Imaarov\DiskMonitor\DiskMonitor::class;
    }
}
