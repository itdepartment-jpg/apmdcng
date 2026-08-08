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
        Schema::create('career_applications', function (Blueprint $table) {

            $table->id();

            // Career Relationship
            $table->foreignId('career_id')
                ->constrained('careers')
                ->cascadeOnDelete();

            // Applicant Information
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 50);

            // Application
            $table->text('cover_letter')->nullable();

            // CV / Resume
            $table->string('cv_path')->nullable();

            // Application Status
            $table->enum('status', [
                'New',
                'Reviewing',
                'Shortlisted',
                'Interview',
                'Hired',
                'Rejected',
            ])->default('New');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_applications');
    }
};