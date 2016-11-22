<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('name') -> comment('商品名称');
            $table->string('price') -> comment('商品价格');
            $table->string('number') -> comment('商品数量');
            $table->integer('gid') -> comment('商品编号');
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
