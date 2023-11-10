<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->integer('dayWeek');
            $table->integer('couple');
            $table->integer('subject_id');
            $table->integer('room_id');

            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
