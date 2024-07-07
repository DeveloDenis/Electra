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
        Schema::create('specifications_mother_board_create', function (Blueprint $table) {
            $table->id();
            $table->string('motherboard_manufacturer')->nullable();//varchar(255)
            $table->string('socket_processor')->nullable();
            $table->string('chipset')->nullable();
            $table->string('onboard_slots')->nullable();
            $table->string('back_panel_ports')->nullable();
            $table->string('networck')->nullable();
            $table->string('total_number_of_memory_slots')->nullable();

            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications_mother_board_create');
    }
};
