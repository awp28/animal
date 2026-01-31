<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('breed_id')->nullable()->constrained('breeds')->onDelete('set null');
            $table->string('title', 200);
            $table->string('type', 100);
            $table->decimal('price', 14, 2);
            $table->string('currency', 10)->default('UZS');
            $table->string('age', 50)->nullable();
            $table->string('gender', 20)->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('quantity', 10, 2)->nullable();
            $table->string('unit', 50)->nullable();
            $table->text('description');
            $table->foreignId('region_id')->constrained('regions');
            $table->string('contact_phone', 20)->nullable();
            $table->integer('views')->default(0);
            $table->string('status', 20)->default('active');
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};