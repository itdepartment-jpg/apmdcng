<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('leadership_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('image_path')->nullable();
            $table->text('description');

            // Category can be: executive, senior, key
            $table->enum('category', ['executive', 'senior', 'key']);

            // For ordering team members within their category
            $table->integer('order')->default(0);

            // Additional optional fields
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('linkedin')->nullable();
            $table->date('appointed_date')->nullable();

            $table->timestamps();
            $table->softDeletes(); // For soft deletion
        });

        // Separate table for section headers (optional but recommended)
        Schema::create('section_headers', function (Blueprint $table) {
            $table->id();
            $table->string('section_name')->unique(); // e.g., 'leadership_team'
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('leadership_teams');
        Schema::dropIfExists('section_headers');
    }
};
