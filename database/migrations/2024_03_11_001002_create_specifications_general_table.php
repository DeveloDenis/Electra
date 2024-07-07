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
        Schema::create('specifications_general', function (Blueprint $table) {
            $table->id();
            $table->string('device_type')->nullable();//varchar(255)
            $table->string('destined_for')->nullable();
            $table->string('conectivity')->nullable();
            $table->string('package_contents')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('operation_system_version')->nullable();
            $table->string('line-up')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('lenght')->nullable();
            $table->string('dimension')->nullable();
            $table->string('color')->nullable();
            $table->string('SIM_slots')->nullable();
            $table->string('SIM_type')->nullable();
            $table->string('bluetooth_version')->nullable();
            $table->string('senzors')->nullable();
            $table->string('relased_yaer')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications_general');
    }
};
