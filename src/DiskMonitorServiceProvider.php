<?php

namespace Imaarov\DiskMonitor;

use Illuminate\Support\Facades\Route;
use Imaarov\DiskMonitor\Commands\RecordDiskMetricCommand;
use Imaarov\DiskMonitor\Http\Controllers\DiskMetricsController;
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
            ->hasMigration('create_disk-monitor_tables')
            ->hasCommand(RecordDiskMetricCommand::class);
    }

    public function packageRegistered()
    {
        Route::macro('diskMonitor', function (string $prefix) {
            Route::prefix($prefix)->group(function () {
                Route::get('/', '\\'.DiskMetricsController::class);
            });
        });
    }
}
