<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cod_store');
            $table->string('prod_name');
            $table->string('prod_description');
            $table->text('prod_body');
            $table->decimal('prod_price', 10, 2);
            $table->string('prod_slug');
            $table->timestamps();

            $table->foreign('cod_store')->references('stor_id')->on('stores');
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
