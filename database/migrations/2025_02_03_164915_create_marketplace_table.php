<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketplaceTable extends Migration
{
    public function up()
    {
        Schema::create('marketplace', function (Blueprint $table) {
            $table->id(); // BIGINT PRIMARY KEY AUTO_INCREMENT
            $table->unsignedBigInteger('seller_id'); // BIGINT NOT NULL
            $table->string('product_name'); // VARCHAR(255) NOT NULL
            $table->decimal('price', 10, 2); // DECIMAL(10,2) NOT NULL
            $table->integer('stock'); // INT NOT NULL
            $table->text('description')->nullable(); // TEXT
            $table->unsignedBigInteger('category_id'); // BIGINT NOT NULL
            $table->enum('status', ['active', 'inactive'])->default('active'); // ENUM DEFAULT 'active'
            $table->timestamps(); // created_at

            // FOREIGN KEY
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('marketplace');
    }
}