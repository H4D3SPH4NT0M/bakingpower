<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('product_listings');
            $table->binary('product_pictures');
            $table->string('user_orders');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_price');
            $table->string('product_quantity');
            $table->string('product_category');
            $table->string('product_subcategory');            
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