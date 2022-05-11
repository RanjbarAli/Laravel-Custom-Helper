<?php

namespace RanjbarAli\LaravelCustomHelper\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelCustomHelper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-custom-helper';
    }
}
