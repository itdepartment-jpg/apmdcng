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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('full_description')->nullable();
            $table->string('location');
            $table->string('image_path');
            $table->string('client_name');
            $table->string('contractor')->nullable();
            $table->string('scope_of_work');
            $table->string('vessel_name')->nullable(); // For security vessel projects
            $table->string('vessel_image_path')->nullable();
            $table->string('service_type')->nullable(); // diving, security, maintenance etc.

            // Status management
            $table->enum('status', ['active', 'completed', 'upcoming', 'archived'])->default('active');
            $table->boolean('is_featured')->default(false);

            // Date fields
            $table->date('start_date');
            $table->date('end_date')->nullable();

            // For testimonials relationship
            $table->boolean('has_testimonial')->default(false);

            $table->timestamps();
            $table->softDeletes(); // For archiving
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
