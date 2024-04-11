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
        Schema::create('reminder_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title_string');
            $table->string('color_hex_string');
            $table->timestamps();
        });

        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reminder_list_id');
            $table->foreignId('user_id');
            $table->string('title_string');
            $table->string('description_string')->nullable();
            $table->string('attachment_id')->nullable();
            $table->string('repeat_category')->nullable();
            $table->string('remind_year')->nullable();
            $table->string('remind_month')->nullable();
            $table->string('remind_day')->nullable();
            $table->string('remind_hour');
            $table->string('remind_min');
            $table->string('priority_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
