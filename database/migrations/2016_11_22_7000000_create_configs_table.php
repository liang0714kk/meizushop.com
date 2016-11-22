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
            $table->increments('id')->comment('ID');
            $table->string('title')->comment('网站标题');
            $table->string('logo')->unique()->comment('LOGO');
            $table->string('keywords')->comment('关键字');
            $table->string('des')->comment('描述');
            $table->integer('open')->comment('开关');
            $table->string('copyright')->comment('版权');
            $table->string('help')->comment('帮助');
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
