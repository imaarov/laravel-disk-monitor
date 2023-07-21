<?php

namespace Imaarov\DiskMonitor\Commands;

use Illuminate\Console\Command;

class RecordDiskMetric extends Command
{
    public $signature = 'record-disk-metric';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
