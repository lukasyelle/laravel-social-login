<?php

namespace lukasyelle\LaravelSocialLogin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \lukasyelle\LaravelSocialLogin\LaravelSocialLogin
 */
class LaravelSocialLogin extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \lukasyelle\LaravelSocialLogin\LaravelSocialLogin::class;
    }
}
