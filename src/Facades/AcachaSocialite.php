<?php

namespace Acacha\Socialite\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class AdminLTE.
 */
class AcachaSocialite extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'AcachaSocialite';
    }
}
