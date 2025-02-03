<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->string('code')->unique(); // VARCHAR(50) UNIQUE NOT NULL
            $table->decimal('discount', 10, 2); // DECIMAL(10,2) NOT NULL
            $table->date('valid_until'); // DATE NOT NULL
            $table->timestamps(); // created_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}