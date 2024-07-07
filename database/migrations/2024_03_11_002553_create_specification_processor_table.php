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
        Schema::create('specification_processor', function (Blueprint $table) {
            $table->id();
            $table->string('processor_type')->nullable();//varchar(255)
            $table->string('processor_model')->nullable();
            $table->string('processor_tehnology')->nullable();
            $table->string('processor_frequency')->nullable();
            $table->string('processor_stocket')->nullable();
            $table->string('processor_manufactures')->nullable();
            $table->string('number_of_cores')->nullable();
            $table->string('cache')->nullable();
            $table->string('integrated_graphics_processor')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specification_processor');
    }
};
