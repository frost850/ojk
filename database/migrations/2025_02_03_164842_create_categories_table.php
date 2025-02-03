<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->string('category_name'); // VARCHAR(255) NOT NULL
            $table->timestamps(); // created_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}