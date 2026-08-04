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
        Schema::create('shipments', function (Blueprint $table) {
    $table->id();

    // Shipment Information
    $table->string('shipment_reference')->unique();
    $table->string('tracking_number')->unique();

    // Container Details
    $table->string('container_number')->unique();
    $table->string('container_size');
    $table->string('vessel_name');

    // Relationships
    $table->foreignId('partner_id')
        ->constrained()
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->foreignId('carrier_id')
        ->constrained()
        ->cascadeOnUpdate()
        ->restrictOnDelete();

    $table->string('status');

    // Arrival Date
    $table->date('eta')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};