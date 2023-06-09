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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->nullable();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email')->unique();
            $table->string('Mot_de_passe');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('CNE')->unique()->nullable();
            $table->date('Date_de_naissance')->nullable();
            $table->string('specialite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
