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
        Schema::create('specifications_foto_video', function (Blueprint $table) {
            $table->id();
            $table->string('number_camera')->nullable();//varchar(255)
            $table->string('principal_camera_resolution')->nullable();
            $table->string('frontal_camera_resolution')->nullable();
            $table->string('video_rezolution')->nullable();
            $table->string('fot&video_features')->nullable();
            $table->string('blit')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications_foto_video');
    }
};
