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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_etudiant');
            $table->string('email_etudiant');
            $table->string('telephone_etudiant');
            $table->foreignId('soiree_id')->constrained()->onDelete('cascade');
            $table->dateTime('date_reservation');
            $table->enum('statut', ['confirmée', 'en attente', 'annulée']);
            $table->json('goodies_attribues')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
