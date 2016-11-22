<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGparTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpar', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('base') -> comment('基础信息');
            $table->string('screen') -> comment('屏幕');
            $table->string('rom') -> comment('内存');
            $table->string('cpu') -> comment('CPU');
            $table->string('camera') -> comment('相机');
            $table->string('mtouch') -> comment('mTouch');
            $table->string('pack') -> comment('包装清单');
            $table->string('other') -> comment('其他参数');
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
