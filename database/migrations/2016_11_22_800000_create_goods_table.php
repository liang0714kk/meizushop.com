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
            $table->string('photo') -> comment('分类展示图片') -> default('default.jpg');
            $table->string('banner') -> comment('广告横图') -> default('default.jpg');
            $table->string('name') -> unique() -> comment('分类名称');
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
