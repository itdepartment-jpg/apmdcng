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
        Schema::create('shipment_tracking_events', function (Blueprint $table) {
            $table->id();

            $table->foreignId('shipment_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            // Tracking information
            $table->string('status');
            $table->string('location')->nullable();
            $table->text('description')->nullable();

            // When this event occurred
            $table->timestamp('event_date');

            $table->timestamps();

            // Useful for retrieving a shipment timeline quickly
            $table->index(['shipment_id', 'event_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_tracking_events');
    }
};