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
        Schema::table('specifications_general', function (Blueprint $table) {
           $table->string('model')->nullable();//varchar(255)
           $table->string('tehnology')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('specifications_general', function (Blueprint $table) {
            //
        });
    }
};
