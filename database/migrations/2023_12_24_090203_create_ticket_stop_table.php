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
        Schema::create('ticket_stop', function (Blueprint $table) {
            $table->id();
            $table->foreignId('line_id')->constrained();
            $table->foreignId('bus_id')->constrained();
            $table->foreignId('trip_id')->constrained();
            $table->foreignId('seat_id')->constrained();
            $table->foreignId('stop_id')->constrained();
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_stop');
    }
};
