<?php

namespace Imaarov\DiskMonitor\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Imaarov\DiskMonitor\Models\DiskMonitorEntry;

class RecordDiskMetricCommand extends Command
{
    public $signature = 'disk-monitor:record-metrics';

    public $description = 'Record the metrics of the disk';

    public function handle(): int
    {
        $this->comment('Recording metrics...');

        collect($disk_names = config('disk-monitor.disk_names'))
            ->each(fn (string $disk_name) => $this->recordMetrics($disk_name));

        $this->comment('All done!');

        return self::SUCCESS;
    }

    protected function recordMetrics(string $disk_name): void
    {
        $this->info("Recording metrics for disk `{$disk_name}`...");
        $disk = Storage::disk($disk_name);
        $file_count = count($disk->allFiles());
        DiskMonitorEntry::create([
            'disk_name' => $disk_name,
            'file_count' => $file_count,
        ]);
    }
}
