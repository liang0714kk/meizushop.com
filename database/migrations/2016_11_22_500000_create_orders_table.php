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
            $table->integer('phone')-> unique() -> comment('收件人手机');
            $table->string('remark')  -> comment('配送说明');
            $table->integer('date') -> comment('订单日期');
            $table->integer('num') -> comment('订单编号');
            $table->double('total') -> comment('订单总金额');
            $table->integer('uid') -> comment('会员编号');
            $table->integer('payid') -> comment('支付编号');
            $table->integer('deliverid') -> comment('配送编号');
            $table->string('state') -> comment('是否确认') -> default('未确认');
            $table->string('pay') -> comment('是否支付') -> default('未支付');
            $table->string('deliver') -> comment('是否发货') -> default('未发货');
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
