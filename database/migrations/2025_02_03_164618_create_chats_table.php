<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->unsignedBigInteger('sender_id'); // BIGINT NOT NULL
            $table->unsignedBigInteger('receiver_id'); // BIGINT NOT NULL
            $table->text('message'); // TEXT NOT NULL
            $table->timestamps(); // created_at

            // FOREIGN KEY
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chats');
    }
}