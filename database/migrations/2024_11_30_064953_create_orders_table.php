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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->foreignId('driver_id')->nullable()->constrained('users')->onDelete('cascade'); // Driver bisa kosong
            $table->string('pick_location');
            $table->string('des_location');
            $table->decimal('distance', 8, 2)->nullable(); // Jarak dalam km, nullable
            $table->decimal('price', 10, 2)->nullable(); // Harga, nullable
            $table->decimal('rating', 3, 1)->nullable(); // Rating (1.0 - 5.0), nullable
            $table->enum('status', ['pending', 'accepted', 'in_progress', 'completed', 'cancelled'])->default('pending'); // Status order
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
