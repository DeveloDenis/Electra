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
        Schema::create('specifications_multymedia', function (Blueprint $table) {
            $table->id();
            $table->string('optical_drive')->nullable();//varchar(255)
            $table->string('web_camera')->nullable();
            $table->string('audio')->nullable();
            $table->string('audio_tehnologii')->nullable();
            $table->string('loudspeaker_manufacturer')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications_multymedia');
    }
};
