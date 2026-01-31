<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id(); // Viloyat/tuman ID
            $table->string('name', 100); // Nomi
            $table->foreignId('parent_id')->nullable()->constrained('regions')->onDelete('cascade'); // Ierarxiya (tuman → viloyat)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};