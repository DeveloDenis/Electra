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
        Schema::create('_privacypolicy_policy', function (Blueprint $table) {
            $table->id();
            $table->string('paragraph1')->nullable();
            $table->string('paragraph2')->nullable();
            $table->string('paragraph3')->nullable();
            $table->string('paragraph4')->nullable();
            $table->string('paragraph5')->nullable();
            $table->string('paragraph6')->nullable();
            $table->string('paragraph7')->nullable();
            $table->string('paragraph8')->nullable();
            $table->string('paragraph9')->nullable();
            $table->string('paragraph10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_privacypolicy_policy');
    }
};
