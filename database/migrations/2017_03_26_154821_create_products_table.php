<?php

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
            $table->increments('product_id');
            $table->integer('product_categories_id')->unsigned();//Поле для foreign key должно быть integer!!!
            $table->string('bar_code', 255);
            $table->string('name', 40);
            $table->text('description');
            $table->double('price')->unsigned();
            $table->json('features');
            $table->tinyInteger('is_active')->unsigned();
            $table->softDeletes(); //Для мягкого удаления.Создаёт колонку deleted_at.
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
        Schema::drop('products');
    }
}
