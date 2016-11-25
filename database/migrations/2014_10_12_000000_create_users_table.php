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
            $table->string('email')->comment('邮箱');
            $table->string('password')->comment('密码');
            $table->tinyInteger('status')->comment('状态')->default(1);
            $table->tinyInteger('author')->comment('权限')->default(0);
            $table->string('photo')->comment('头像')->default('default.jpg');
            $table->tinyInteger('sex')->comment('性别');
            $table->integer('phone')->comment('手机');
            $table->string('nickname')->comment('昵称');
            $table->tinyInteger('carts')->comment('购物车状态');
            $table->integer('level')->comment('等级')->default(10);
            $table->rememberToken()->comment('令牌');
            $table->integer('created_at')->comment('创建时间');
            $table->integer('updated_at')->comment('更新时间');

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
