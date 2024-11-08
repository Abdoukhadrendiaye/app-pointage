<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pointages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->default(1)->change();
            $table->timestamp('date');
            $table->timestamp('heure_entree')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('heure_sortie')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
            

    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pointages');
    }

};
