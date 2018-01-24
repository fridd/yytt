<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned()->nullable()->comment('站点分类');
            $table->string('title', 170)->comment('轮播标题');
            $table->string('seo_title', 70)->comment('SEO标题');
            $table->string('seo_key', 170)->comment('SEO关键字');
            $table->string('seo_description', 255)->comment('SEO描述');
            $table->string('url', 255)->comment('轮播路由')->nullable();
            $table->integer('blank')->unsigned()->comment('是否新窗口打开')->nullable();
            $table->string('thumb')->comment('轮播图片');
            $table->integer('status')->unsigned()->comment('显示状态');
            $table->string('digest', 200)->comment('轮播摘要');
            $table->text('content')->comment('轮播内容');
            $table->integer('user_id')->unsigned()->comment('作者');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
            $table->integer('view')->comment('查看次数');
            $table->timestamp('publish_at');
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
        Schema::dropIfExists('banners');
    }
}
