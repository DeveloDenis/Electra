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
        Schema::create('specifications_memory', function (Blueprint $table) {
            $table->id();
            $table->string('memory_capacity')->nullable();//varchar(255)
            $table->string('memory_type')->nullable();
            $table->string('memory_manufacturer')->nullable();
            $table->string('memory_frequez')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications_memory');
    }
};
