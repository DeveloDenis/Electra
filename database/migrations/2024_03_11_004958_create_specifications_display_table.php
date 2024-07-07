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
        Schema::create('specifications_display', function (Blueprint $table) {
            $table->id();
            $table->string('diagonal_display')->nullable();//varchar(255)
            $table->string('format_display')->nullable();
            $table->string('tehnology_display')->nullable();
            $table->string('refresh_rate')->nullable();
            $table->string('luminozity')->nullable();
            $table->string('touchscreen')->nullable();
            $table->string('rezolution')->nullable();
            $table->string('display_finish')->nullable();
            $table->string('display_functions')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications_display');
    }
};
