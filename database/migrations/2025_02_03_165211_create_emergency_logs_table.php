<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencyLogsTable extends Migration
{
    public function up()
    {
        Schema::create('emergency_logs', function (Blueprint $table) {
            $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->unsignedBigInteger('user_id'); // BIGINT NOT NULL
            $table->string('action'); // VARCHAR(255) NOT NULL
            $table->timestamps(); // created_at

            // FOREIGN KEY
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('emergency_logs');
    }
}