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
        Schema::create('table_specifications_storage', function (Blueprint $table) {
            $table->id();
            $table->string('storage_type')->nullable();//varchar(255)
            $table->string('producer_&_SSD_model')->nullable();
            $table->string('SSD_capacity')->nullable();
            $table->string('SSD_interface')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_specifications_storage');
    }
};
