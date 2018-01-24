<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200)->comment('活动名称');
            $table->tinyInteger('sort')->unsigned()->comment('活动序号');
            $table->tinyInteger('status')->unsigned()->default(0)->comment('活动状态');
            $table->decimal('price')->comment('活动价格');
            $table->integer('max_seat')->unsigned()->comment('最大座位');
            $table->string('contact', 200)->comment('联系方式');
            $table->timestamp('publish_at')->comment('活动时间');
            $table->timestamps();
			$table->softDeletes();
        });

        Schema::create('seat_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->unsigned()->comment('活动编号');
			$table->foreign('activity_id')->references('id')->on('seat_activities');
            $table->string('order_id', 50)->comment('订单编号');
            $table->string('seats', 50)->comment('坐位号');
            $table->integer('num')->unsigned()->comment('订单数量');
            $table->string('openid', 50)->comment('OpenID');
            $table->string('nickname', 200)->comment('微信昵称');
            $table->string('phone', 20)->comment('联系电话');
            $table->string('name', 50)->comment('微信号');
            $table->string('username', 50)->comment('用户姓名');
            $table->tinyInteger('status')->unsigned()->comment('订单状态');
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
        Schema::dropIfExists('seat_activities');
        Schema::dropIfExists('seat_orders');
    }
}
