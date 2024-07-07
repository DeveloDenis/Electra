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
        Schema::create('specifications_case', function (Blueprint $table) {
            $table->id();
            $table->string('case_type')->nullable();//varchar(255)
            $table->string('motherboard_format_compatibility')->nullable();
            $table->string('source_power')->nullable();
            $table->string('processor_cooling_system')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications_case');
    }
};
