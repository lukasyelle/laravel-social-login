<?php

namespace lukasyelle\LaravelSocialLogin;

use lukasyelle\LaravelSocialLogin\Commands\LaravelSocialLoginCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSocialLoginServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-social-login')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_social_login_table')
            ->hasCommand(LaravelSocialLoginCommand::class);
    }
}
