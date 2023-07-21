<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('disk_monitor_entries', function (Blueprint $table) {
            $table->id();

            $table->string('disk_name');
            $table->integer('file_count');

            $table->timestamps();
        });
    }
};
