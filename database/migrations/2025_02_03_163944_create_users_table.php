<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->string('name'); // VARCHAR(255) NOT NULL
            $table->string('email')->unique(); // VARCHAR(255) UNIQUE NOT NULL
            $table->string('password'); // VARCHAR(255) NOT NULL
            $table->enum('role', ['admin', 'driver', 'user', 'preview', 'sponsor']); // ENUM NOT NULL
            $table->string('phone')->unique()->nullable(); // VARCHAR(20) UNIQUE
            $table->decimal('wallet_balance', 10, 2)->default(0.00); // DECIMAL(10,2) DEFAULT 0.00
            $table->timestamp('email_verified_at')->nullable(); // TIMESTAMP NULL
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
