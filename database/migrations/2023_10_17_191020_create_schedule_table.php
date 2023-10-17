<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->integer('Week');
            $table->integer('dayWeek');
            $table->integer('Сouple');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('room_id');

            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
