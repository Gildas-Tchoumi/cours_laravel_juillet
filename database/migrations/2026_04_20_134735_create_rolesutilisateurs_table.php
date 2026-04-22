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
        Schema::create('rolesutilisateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('role_id')->constrained('roles', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rolesutilisateurs');
    }
};
