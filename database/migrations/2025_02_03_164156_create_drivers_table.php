<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->enum('vehicle_type', ['motor', 'mobil']);
            $table->string('vehicle_plate')->unique();
            $table->string('driver_license')->unique();
            $table->enum('status', ['active', 'inactive', 'banned'])->default('inactive');
            $table->decimal('latitude', 10, 8)->nullable()->default(null);
            $table->decimal('longitude', 11, 8)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
}
