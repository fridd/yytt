<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('作者id');
            $table->string('type', 70)->comment('类别');
            $table->string('title',170)->comment('标题');    
            $table->string('seo_title', 70)->comment('SEO标题');
            $table->string('seo_key', 170)->comment('SEO关键字');
            $table->string('seo_description', 255)->comment('SEO描述');     
            $table->integer('view')->comment('查看次数');            
            $table->string('keys', 170)->comment('关键字')->nullable();
            $table->string('digest', 255)->comment('描述')->nullable();
            $table->text('content')->comment('内容');
            $table->string('thumb')->comment('封面图片')->nullable();
            $table->integer('status')->unsigned()->comment('显示状态');
            $table->string('enterUrl')->comment('进入官网');
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
        Schema::dropIfExists('brands');
    }
}
