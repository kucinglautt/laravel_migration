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
        Schema::create("pasien", function (Blueprint $table) {
            $table->id();
            $table->string("name pasien");
            $table->string("umur");
            $table->foreignId("id_user")->references("id_user")->on("users");
            $table->timestamps();
        });
    }
       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pasien");
    }
};
