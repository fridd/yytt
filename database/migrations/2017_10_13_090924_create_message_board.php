<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageBoard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_board', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned()->nullable()->comment('站点分类');
            $table->integer('message_type_id')->unsigned()->comment('留言类型id');
            $table->string('name',100)->comment('姓名');
            $table->string('tel',100)->comment('联络方式');
            $table->string('email',100)->comment('邮箱');
            $table->string('city')->comment('所属地区');
            $table->string('address',100)->comment('地址');
            $table->text('content')->comment('留言内容');
            $table->softDeletes();
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
        Schema::dropIfExists('message_board');
    }
}
