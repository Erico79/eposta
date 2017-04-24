<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postal_code', 6);
            $table->string('constituency', 45);
            $table->string('county', 45);
            $table->string('office', 45);
            $table->string('status', 45);
            $table->string('geo_location', 45);
            $table->integer('postal_number');
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
        Schema::dropIfExists('post_offices');
    }
}
