<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned()->nullable()->comment('站点分类');
            $table->tinyInteger('classification')->unsigned()->default(0)->comment('链接类别');  // 分为图片链接和文字链接
            $table->string('url', 255)->comment('链接路由');
            $table->string('name', 255)->comment('链接名称');
            $table->string('image', 255)->nullable()->comment('链接图片');
            $table->tinyInteger('sort')->unsigned()->default(10)->comment('链接排序');
            $table->tinyInteger('status')->unsigned()->default(0)->comment('链接状态');
            $table->tinyInteger('target')->unsigned()->default(0)->comment('新窗口打开');
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
        Schema::dropIfExists('links');
    }
}
