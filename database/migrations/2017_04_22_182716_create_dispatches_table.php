<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notification_id')->unsigned();
            $table->foreign('notification_id')
                ->references('id')
                ->on('notifications')
                ->onUpdate('cascade');
            $table->integer('ebox_id')->unsigned();
            $table->foreign('ebox_id')
                ->references('id')
                ->on('eboxes')
                ->onUpdate('cascade');
            $table->boolean('sent_on_firebase')->default(false);
            $table->boolean('sent_on_sms')->default(false);
            $table->dateTime('date_sent_on_firebase')->nullable();
            $table->dateTime('date_sent_on_sms')->nullable();
            $table->dateTime('date_added')->nullable();
            $table->boolean('read')->default(false);
            $table->dateTime('date_read')->nullable();
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
        Schema::dropIfExists('dispatches');
    }
}
