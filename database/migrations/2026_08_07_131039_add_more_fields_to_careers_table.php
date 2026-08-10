<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('careers', function (Blueprint $table) {

            $table->string('reference_no')->nullable()->after('id');

            $table->string('experience_required')->nullable()->after('employment_type');

            $table->string('education')->nullable()->after('experience_required');

            $table->string('salary')->nullable()->after('education');

            $table->unsignedInteger('vacancies')->default(1)->after('salary');

            $table->date('application_deadline')->nullable()->after('vacancies');

            $table->enum('status', [
                'Draft',
                'Open',
                'Closed',
            ])->default('Draft')->after('application_deadline');

            $table->boolean('featured')->default(false)->after('status');

            $table->string('job_document')->nullable()->after('featured');

            $table->string('slug')->unique()->nullable()->after('title');

        });
    }

    public function down(): void
    {
        Schema::table('careers', function (Blueprint $table) {

            $table->dropColumn([
                'reference_no',
                'experience_required',
                'education',
                'salary',
                'vacancies',
                'application_deadline',
                'status',
                'featured',
                'job_document',
                'slug',
            ]);

        });
    }
};