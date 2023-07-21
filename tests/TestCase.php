<?php

namespace Imaarov\LaravelDiskMonitor\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Imaarov\LaravelDiskMonitor\LaravelDiskMonitorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Imaarov\\LaravelDiskMonitor\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDiskMonitorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-disk-monitor_table.php.stub';
        $migration->up();
        */
    }
}
