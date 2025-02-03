<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->unsignedBigInteger('user_id'); // BIGINT NOT NULL
            $table->text('ad_content'); // TEXT NOT NULL
            $table->text('target_audience')->nullable(); // TEXT
            $table->integer('clicks')->default(0); // INT DEFAULT 0
            $table->integer('impressions')->default(0); // INT DEFAULT 0
            $table->enum('status', ['active', 'inactive'])->default('active'); // ENUM DEFAULT 'active'
            $table->timestamps(); // created_at

            // FOREIGN KEY
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}