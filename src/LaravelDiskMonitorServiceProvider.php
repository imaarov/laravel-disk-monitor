<?php

namespace Imaarov\LaravelDiskMonitor;

use Imaarov\LaravelDiskMonitor\Commands\LaravelDiskMonitorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-disk-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-disk-monitor_table')
            ->hasCommand(LaravelDiskMonitorCommand::class);
    }
}
