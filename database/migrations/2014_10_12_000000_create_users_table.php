<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('name')->comment('用户名');
            $table->string('email')->unique()->comment('邮箱');
            $table->string('password')->comment('密码');
            $table->tinyInteger('status')->comment('状态')->default(1);
            $table->tinyInteger('author')->comment('权限')->default(0);
            $table->string('photo')->comment('头像')->default('default.jpg');
            $table->tinyInteger('sex')->comment('性别');
            $table->integer('phone')->comment('手机');
            $table->string('nickname')->comment('昵称');
            $table->integer('level')->comment('等级')->default(10);
            $table->rememberToken()->comment('令牌');
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
        Schema::drop('user');
    }
}
