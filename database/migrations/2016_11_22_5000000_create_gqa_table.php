<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGqaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gqa', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('question') -> comment('问题');
            $table->string('answer') -> comment('答案');
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
