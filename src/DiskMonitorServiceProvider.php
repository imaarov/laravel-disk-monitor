<?php

namespace Imaarov\DiskMonitor;

use Imaarov\DiskMonitor\Commands\RecordDiskMetricCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DiskMonitorServiceProvider extends PackageServiceProvider
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
            ->hasMigration('create_disk-monitor_table')
            ->hasCommand(RecordDiskMetricCommand::class);
    }
}
