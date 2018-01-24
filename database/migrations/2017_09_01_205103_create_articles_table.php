
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_category', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 100)->comment('文章标题');
            $table->timestamps();
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned()->nullable()->comment('站点分类');
			$table->string('title', 170)->comment('文章标题');
			$table->string('digest', 200)->comment('文章摘要');
			$table->text('content')->comment('正文内容');
            $table->string('source', 100)->nullable()->comment('内容来源');
            $table->string('seo_title', 70)->comment('SEO标题');
			$table->string('seo_key', 170)->comment('SEO关键字');
			$table->string('seo_description', 255)->comment('SEO描述');
			$table->integer('user_id')->unsigned()->comment('作者');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('cate_id')->unsigned()->comment('文章分类');
			$table->string('thumb', 100)->nullable()->comment('文章封面');
			$table->integer('status')->unsigned()->comment('显示状态');
			$table->integer('view')->comment('查看次数');
            $table->text('newimg')->nullable()->comment('多图片上传');
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
        Schema::dropIfExists('article_category');
        Schema::dropIfExists('articles');
    }
}
