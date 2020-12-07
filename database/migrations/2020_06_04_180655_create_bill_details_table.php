<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_bill');
            $table->unsignedInteger('id_product');
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->foreign('id_product')->references('id')->on('products');
            $table->integer('quantity');
            $table->double('unit_price', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bill_details');
    }
}
?>