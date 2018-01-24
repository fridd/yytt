<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned()->nullable()->comment('站点分类');
            $table->integer('user_id')->comment('作者id');
            $table->integer('channel_id')->comment('菜单id');
            $table->string('title',170)->comment('标题');
            $table->string('seo_title', 70)->comment('SEO标题');
            $table->string('seo_key', 170)->comment('SEO关键字');
            $table->string('seo_description', 255)->comment('SEO描述');
            $table->integer('view')->comment('查看次数');            
            $table->string('keys')->comment('关键字')->nullable();
            $table->string('digest')->comment('描述')->nullable();
            $table->text('content')->comment('内容');
            $table->string('thumb')->comment('封面图片')->nullable();
            $table->integer('status')->unsigned()->comment('显示状态');
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
        Schema::dropIfExists('pages');
    }
}
