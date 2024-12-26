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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id(); // ID utama untuk tabel
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi dengan tabel users
            $table->date('birth_date'); // Tanggal lahir
            $table->string('driver_license'); // Lokasi file gambar SIM
            $table->string('certificate_of_conduct'); // Lokasi file surat kelakuan baik
            $table->boolean('have_vehicle'); // Apakah memiliki kendaraan
            $table->string('number_plate')->nullable(); // Nomor plat kendaraan (opsional)
            $table->string('vehicle_registration')->nullable(); // Lokasi file STNK (opsional)
            $table->string('vehicle_photo')->nullable(); // Lokasi file foto kendaraan (opsional)
            $table->decimal('rating', 3, 1)->nullable()->default(0.0); // Rating (1.0 - 5.0), nullable
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
