<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('product_info')->nullable();
            $table->string('url')->default('shop/product/');
            $table->string('image_url')->nullable();
            $table->string('link_1')->nullable();
            $table->string('link_2')->nullable();
            $table->string('link_3')->nullable();
            $table->string('link_1_display')->nullable();
            $table->string('link_2_display')->nullable();
            $table->string('link_3_display')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->boolean('visible')->nullable();
            $table->boolean('new_in')->nullable();
            $table->boolean('most_popular')->nullable();
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
}
