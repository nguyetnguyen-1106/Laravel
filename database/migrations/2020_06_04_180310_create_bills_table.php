<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->date('date_order');
            $table->double('total', 8, 2);
            $table->string('payment', 200);
            $table->string('note', 500);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
?>