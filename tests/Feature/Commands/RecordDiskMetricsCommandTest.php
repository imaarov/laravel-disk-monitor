<?php

namespace Imaarov\DiskMonitor\Tests\Feature\Commands;

use Illuminate\Support\Facades\Storage;
use Imaarov\DiskMonitor\Commands\RecordDiskMetricCommand;
use Imaarov\DiskMonitor\Models\DiskMonitorEntry;
use Imaarov\DiskMonitor\Tests\TestCase;

class RecordDiskMetricsCommandTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Storage::fake('local');
    }

    /** @test */
    public function it_will_record_file_count_for_a_disk()
    {
        // Storage::disk('local')->put('test.txt', 'test');

        $this
            ->artisan(RecordDiskMetricCommand::class)
            ->assertExitCode(0);

        $this->assertCount(1, DiskMonitorEntry::get());

        $entry = DiskMonitorEntry::last();
        $this->assertEquals(0, $entry->file_count);

        Storage::put('test.txt', 'text');
        $this
            ->artisan(RecordDiskMetricCommand::class)
            ->assertExitCode(0);

        $entry = DiskMonitorEntry::last();
        $this->assertEquals(1, $entry->file_count);
    }
}
