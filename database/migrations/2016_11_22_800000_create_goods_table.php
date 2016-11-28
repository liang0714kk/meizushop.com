<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('name') - unique() -> comment('商品名字');
            $table->string('photo') -> comment('商品图片');
            $table->integer('pid')  -> comment('父类id');
            $table->string('path') -> comment('路径');
            $table->integer('created_at') -> comment('创建时间');
            $table->integer('updated_at') -> comment('更新时间');
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