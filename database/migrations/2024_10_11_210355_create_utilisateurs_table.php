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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            // $table->string('prenom')->default('username')->change();
            $table->string('email');
            $table->string('telephone');
            // $table->timestamp('email_verificate_at')->nullable();
            $table->string('departement')->nullable();
            $table->string('poste');
            $table->string('genre');
            $table->timestamps();

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
       
    }
};
