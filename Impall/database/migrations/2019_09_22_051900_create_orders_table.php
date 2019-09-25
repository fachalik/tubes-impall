<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('idorder');
            $table->bigInteger('iduser')->unsigned()->nullable();
            $table->bigInteger('idproduct')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('iduser')->references('id')->on('users');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('idproduct')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_iduser_foreign');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_idproduct_foreign');
        });
        Schema::dropIfExists('orders');
    }
}
