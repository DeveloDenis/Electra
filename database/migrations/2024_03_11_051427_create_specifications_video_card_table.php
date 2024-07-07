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
        Schema::create('specifications_video_card', function (Blueprint $table) {
            $table->id();
            $table->string('videocard_type')->nullable();//varchar(255)
            $table->string('videocard_manufacturer')->nullable();
            $table->string('chipset_video')->nullable();
            $table->string('video_card_model')->nullable();
            $table->string('video_memory_capacity')->nullable();
            $table->string('videocard_memory_type')->nullable();
            $table->string('videocard_memory_capacity')->nullable();
            $table->string('videocard_type_memory')->nullable();
            $table->string('videocard_tehnologi')->nullable();
            $table->string('videocard_ports')->nullable();


            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications_video_card');
    }
};
