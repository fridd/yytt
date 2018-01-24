<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel_id')->comment('菜单id');
            $table->string('title', 170)->comment('标题');
            $table->string('keys')->nullable()->comment('关键字');
            $table->string('seo_title', 70)->comment('SEO标题');
            $table->string('seo_key', 170)->comment('SEO关键字');
            $table->string('seo_description', 255)->comment('SEO描述');
            $table->integer('status')->unsigned()->comment('显示状态');
            $table->string('digest', 200)->nullable()->comment('摘要详情');
            $table->text('content')->comment('内容');
            $table->integer('city')->comment('城市');
            $table->string('url')->comment('地图路由');
            $table->string('enterUrl')->comment('进入官网');
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
        Schema::dropIfExists('maps');
    }
}
