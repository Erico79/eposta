<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eboxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('box');
            $table->string('postal_code', 5)->nullable();
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');
            $table->string('identity_number', 45)->nullable();
            $table->string('index', 45)->default(0);
            $table->dateTime('date_added')->nullable();
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
        Schema::dropIfExists('eboxes');
    }
}
