<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('daily_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->tinyInteger('start_mood');
            $table->tinyInteger('end_mood');
            $table->text('good_work_things');
            $table->text('difficult_things')->nullable();
            $table->text('challenges')->nullable();
            $table->tinyInteger('health_condition');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('daily_records');
    }
};