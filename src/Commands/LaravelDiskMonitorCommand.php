<?php

namespace Imaarov\LaravelDiskMonitor\Commands;

use Illuminate\Console\Command;

class LaravelDiskMonitorCommand extends Command
{
    public $signature = 'laravel-disk-monitor';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
