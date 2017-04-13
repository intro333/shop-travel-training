<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('order_details_order_id')->references('order_id')->on('orders')->onDelete('cascade');
        });
        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('order_product_id')->references('product_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->dropForeign(['order_details_order_id']);//Чтобы удалить ключ по его названию, нужно поместить его в массив.
        });
        Schema::table('order_details', function (Blueprint $table) {
            $table->dropForeign(['order_product_id']);//Чтобы удалить ключ по его названию, нужно поместить его в массив.
        });
    }
}
