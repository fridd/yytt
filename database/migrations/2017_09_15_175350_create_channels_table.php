<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned()->nullable()->comment('站点分类');
            $table->integer('pid')->unsigned()->nullable()->default(NULL)->comment('上级菜单');
            $table->string('title', 50)->comment('菜单名称');
            $table->string('title_en', 50)->nullable()->comment('英文菜单名称');
            $table->string('url', 100)->comment('菜单URL');
            $table->string('thumb', 150)->nullable()->comment('菜单封面');
            $table->tinyInteger('sort')->unsigned()->default(10)->comment('菜单排序');
            $table->tinyInteger('status')->unsigned()->default(0)->comment('菜单状态');
            $table->tinyInteger('category')->unsigned()->default(1)->comment('菜单分类');
            $table->tinyInteger('target')->unsigned()->default(0)->comment('新窗口打开');
            $table->tinyInteger('single')->unsigned()->default(1)->comment('是否单页面');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
