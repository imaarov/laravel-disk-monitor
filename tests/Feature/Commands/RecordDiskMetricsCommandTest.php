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
        Storage::fake('external');
    }

    /** @test */
    public function it_will_record_file_count_for_a_single_disk()
    {
        // Storage::disk('local')->put('test.txt', 'test');

        $this
            ->artisan(RecordDiskMetricCommand::class)
            ->assertExitCode(0);

        $this->assertCount(1, DiskMonitorEntry::get());
        $entry = DiskMonitorEntry::last();

        $this->assertEquals(0, $entry->file_count);

        Storage::disk('local')->put('test.txt', 'text');
        $this
            ->artisan(RecordDiskMetricCommand::class)
            ->assertExitCode(0);

        $entry = DiskMonitorEntry::last();
        $this->assertEquals(1, $entry->file_count);
    }

    /** @test */
    public function it_will_record_file_count_for_multiple_disk()
    {
        config()->set('disk-monitor.disk_names', ['local', 'external']);
        Storage::disk('external')->put('test.txt', 'test');

        $this
            ->artisan(RecordDiskMetricCommand::class)
            ->assertExitCode(0);

        $entries = DiskMonitorEntry::get();
        $this->assertCount(2, $entries);

        $this->assertEquals('local', $entries[0]->disk_name);
        $this->assertEquals(0, $entries[0]->file_count);

        $this->assertEquals('external', $entries[1]->disk_name);
        $this->assertEquals(1, $entries[1]->file_count);
    }
}
