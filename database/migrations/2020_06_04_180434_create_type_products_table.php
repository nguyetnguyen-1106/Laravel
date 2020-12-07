<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeProductsTable extends Migration
{
    public function up()
    {
        Schema::create('type_products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->text('description');
            $table->string('image', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_products');
    }
}
?>