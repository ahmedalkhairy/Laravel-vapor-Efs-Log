<?php

namespace Ahmedalkhairy\LaravelVaporEfsLog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ahmedalkhairy\LaravelVaporEfsLog\Commands\LaravelVaporEfsLogCommand;

class LaravelVaporEfsLogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-vapor-efs-log')
            ->hasConfigFile()
            ->hasCommand(LaravelVaporEfsLogCommand::class)
            ->hasCommand(TestEfs::class);
    }
}
