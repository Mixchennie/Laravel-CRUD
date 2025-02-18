<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->tinyIncrements('id'); // Changed to tinyIncrements for auto-incrementing
            $table->string('name', 200);
            $table->string('author', 50);
            $table->text('description')->nullable();
            $table->double('price', 12, 2);
            $table->unsignedTinyInteger('category_id')->nullable();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('set null')
                  ->onUpdate('CASCADE');
            $table->timestamps();
        });
    }


 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
