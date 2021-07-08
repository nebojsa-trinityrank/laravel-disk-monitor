<?php

namespace NebojsaTrinityrank\LaravelDiskMonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NebojsaTrinityrank\LaravelDiskMonitor\LaravelDiskMonitor
 */
class LaravelDiskMonitorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-disk-monitor';
    }
}
