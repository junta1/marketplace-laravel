<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CategoriesProducts', function (Blueprint $table) {
            $table->unsignedBigInteger('cod_categories');
            $table->unsignedBigInteger('cod_products');

            $table->foreign('cod_categories')->references('cate_id')->on('categories')->onDelete('cascade');
            $table->foreign('cod_products')->references('prod_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CategoriesProducts');
    }
}
