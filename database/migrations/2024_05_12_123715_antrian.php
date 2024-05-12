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
        Schema::create("antrian", function (Blueprint $table) {
            $table->id("id_antrian");
            $table->string("no antrian");
            $table->string("status antrian");
            $table->foreignId("id_pasien")->references("id")->on("pasien");
            
            $table->foreignId("id_dokter")->references("id")->on("dokter");
            $table->timestamps();
        });
    }
       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("antrian");
    }
};
