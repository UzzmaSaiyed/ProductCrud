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
        Schema::table('blog3s', function (Blueprint $table) {
            $table->string('Duration');
            $table->string('Category');
            //To add additional field in already existing table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog3s', function (Blueprint $table) {
            $table->dropColumn('Duration');
            $table->dropColumn('Category');
        });
    }
};
