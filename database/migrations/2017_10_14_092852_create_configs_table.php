<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id')->index()->comment('序号');
            $table->integer('site_id')->unsigned()->nullable()->comment('站点分类');
            $table->string('name', 30)->unique()->comment('配置名称'); //unique() 添加唯一索引
            $table->string('title', 50)->comment('配置说明');
            $table->string('extra')->comment('配置值');
            $table->string('remark', 100)->comment('配置说明');
            $table->text('value')->comment('配置值');
            $table->smallInteger('sort')->nullable()->comment('排序');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs');
    }
}
