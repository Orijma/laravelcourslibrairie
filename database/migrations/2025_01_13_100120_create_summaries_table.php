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
        Schema::create('summaries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Titre de l\'ouvrage');
            $table->string('slug')->comment('Slug de l\'ouvrage');
            $table->longText('content')->comment('Cours résumé de l\'ouvrage');
            $table->foreignId('user_id')->comment('Identifiant de l\'utilisateur')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summaries');
    }
};
