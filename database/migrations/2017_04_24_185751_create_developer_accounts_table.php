<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeveloperAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('token');
            $table->string('display_name');
            $table->string('email');
            $table->dateTime('date_added');
            $table->string('avator');
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
        Schema::dropIfExists('developer_accounts');
    }
}
