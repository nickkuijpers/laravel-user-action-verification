<?php

namespace Niku\LaravelUserActionVerification;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Cache\CacheManager
 * @see \Illuminate\Cache\Repository
 */
class UserActionVerificationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelVerifyUserAction';
    }
}
