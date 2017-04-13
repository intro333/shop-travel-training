<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('user_details_id');
            $table->integer('user_details_user_id')->unsigned();//Поле для foreign key должно быть integer и ->unsigned()
            $table->string('fname', 40);
            $table->string('sname', 40);
            $table->string('mname', 40);
            $table->string('phone', 40);
            $table->string('address', 255);
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
        Schema::drop('user_details');
    }
}
