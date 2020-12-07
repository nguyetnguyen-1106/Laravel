<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->unsignedInteger('id_type');
            $table->foreign('id_type')->references('id')->on('type_products');
            $table->text('description');
            $table->float('unit_price', 8, 2);
            $table->float('promotion_price', 8, 2);
            $table->string('image', 255);
            $table->string('unit', 255);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
?>