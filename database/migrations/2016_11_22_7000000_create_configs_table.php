<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id')->comment('ID') -> default(1);
            $table->string('title')->comment('网站标题') -> default('魅族官网在线商店-提供魅族 PRO 5、魅族MX系列、魅蓝note系列、魅蓝metal系列产品的预约和购买');
            $table->string('logo')->comment('LOGO') -> default('default.jpg');
            $table->string('keywords')->comment('关键字') -> default('魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城');
            $table->string('des')->comment('描述') -> default('魅族商城是魅族面向全国服务的官方电商平台，提供魅族 PRO 系列、MX系列、魅蓝note系列和魅蓝metal系列的手机，配件和智能硬件的预约和购买。官方正品，全国联保，全场包邮，7天无理由退货，15天换货保障。');
            $table->integer('open')->comment('开关') -> default(1);
            $table->string('copyright')->comment('版权') -> default(' ©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.');
            $table->string('help')->comment('帮助') -> default('支付方式-配送说明-售后服务-付款帮助');
            $table->string('minlogo')->comment('minlogo') -> default('minlogo.ico');
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
