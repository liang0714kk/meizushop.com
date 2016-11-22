<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGsupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gsupports', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('ant') -> comment('支持蚂蚁分期');
            $table->string('marrive') -> comment('百城速达');
            $table->string('freedeliver') -> comment('顺丰包邮');
            $table->string('back') -> comment('无理由退货');
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
