<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adders', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('name') -> comment('姓名');
            $table->string('adder') -> comment('地址');
            $table->integer('phone') -> comment('电话');
            $table->integer('uid') -> comment('会员编号');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
