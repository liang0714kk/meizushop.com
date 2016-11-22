<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGcolorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcolors', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('name') -> comment('颜色名字');
            $table->string('photo') -> comment('颜色图片');
            $table->integer('gid')  -> comment('商品id');
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
