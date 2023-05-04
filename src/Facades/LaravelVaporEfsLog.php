<?php

namespace Ahmedalkhairy\LaravelVaporEfsLog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahmedalkhairy\LaravelVaporEfsLog\LaravelVaporEfsLog
 */
class LaravelVaporEfsLog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ahmedalkhairy\LaravelVaporEfsLog\LaravelVaporEfsLog::class;
    }
}
