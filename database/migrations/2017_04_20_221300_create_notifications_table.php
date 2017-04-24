<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_ebox_id')->nullable()->unsigned();
            $table->foreign('sender_ebox_id')
                ->references('id')
                ->on('eboxes')
                ->onUpdate('cascade');
            $table->string('subject',200)->nullable();
            $table->text('message')->nullable();
            $table->dateTime('send_date')->nullable();
            $table->string('message_summary', 200)->nullable();
            $table->boolean('draft')->default(0)->nullable();
            $table->integer('type')->nullable();
            $table->integer('notification_type_id')->default(1);
            $table->json('data')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
