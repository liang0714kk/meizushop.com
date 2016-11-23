<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gdetails', function (Blueprint $table) {
            $table->increments('id') -> comment('编号');
            $table->string('name') -> unique() -> comment('商品名称');
            $table->string('explain') -> comment('说明');
            $table->double('price') -> comment('商品价格');
            $table->string('color') -> comment('颜色');
            $table->string('photo') -> comment('图片');
            $table->string('net')  -> comment('网络类型');
            $table->string('rom') -> comment('内存');
            $table->string('package') -> comment('套餐');
            $table->string('support') -> comment('支持');
            $table->string('adder') -> comment('地址');
            $table->string('server') -> comment('售后服务');
            $table->integer('num') -> comment('数量');
            $table->string('ticket') -> comment('购物券');
            $table->string('hz') -> comment('频段');
            $table->string('usb') -> comment('USB输出');
            $table->string('size') -> comment('尺寸');
            $table->string('mile') -> comment('里程');
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
