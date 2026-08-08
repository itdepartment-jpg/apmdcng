<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('careers', function (Blueprint $table) {

            $table->longText('responsibilities')
                ->nullable()
                ->after('description');

            $table->longText('requirements')
                ->nullable()
                ->after('responsibilities');

        });
    }

    public function down(): void
    {
        Schema::table('careers', function (Blueprint $table) {

            $table->dropColumn([
                'responsibilities',
                'requirements',
            ]);

        });
    }
};