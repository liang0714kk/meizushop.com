<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('name') -> comment('收件人');
            $table->string('adder') -> comment('收件人地址');
            $table->string('phone')-> unique() -> comment('收件人手机');
            $table->string('remark')  -> comment('配送说明');
            $table->integer('date') -> comment('订单日期');
            $table->integer('no') -> comment('数量');
            $table->integer('num') -> comment('订单编号');
            $table->double('total') -> comment('订单总金额');
            $table->integer('uid') -> comment('会员编号');
            $table->integer('gid') -> comment('商品编号');
            $table->integer('payid') -> comment('支付编号');
            $table->integer('paytime') -> comment('支付时间');
            $table->integer('deliverid') -> comment('配送编号');
            $table->integer('state') -> comment('是否确认') -> default('0');
            $table->integer('pay') -> comment('是否支付') -> default('0');
            $table->integer('deliver') -> comment('是否发货') -> default('0');
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
