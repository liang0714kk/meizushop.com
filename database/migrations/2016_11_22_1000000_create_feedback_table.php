<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->integer('uid')  -> comment('用户id');
            $table->string('problem') -> comment('反馈问题');
            $table->string('suggest') -> comment('反馈建议');
            $table->string('email') -> comment('用户邮箱');
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
