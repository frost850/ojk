<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralsTable extends Migration
{
    public function up()
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->unsignedBigInteger('referrer_id'); // BIGINT NOT NULL
            $table->unsignedBigInteger('referred_id'); // BIGINT NOT NULL
            $table->decimal('reward', 10, 2)->nullable(); // DECIMAL(10,2)
            $table->timestamps(); // created_at

            // FOREIGN KEY
            $table->foreign('referrer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('referred_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('referrals');
    }
}