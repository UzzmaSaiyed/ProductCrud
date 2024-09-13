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
        Schema::create('blog3s', function (Blueprint $table) {
            $table->bigIncrements('productid');
            $table->string('productname');
            $table->string('productdescription');
            $table->boolean('status');
            $table->timestamps();
            //This is for first time creation of table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog3s');
    }
};
