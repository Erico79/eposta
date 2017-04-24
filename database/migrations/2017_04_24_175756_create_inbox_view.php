<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInboxView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            create or replace view inbox as
            select d.*,
              n.subject,
              n.message,
              n.sender_ebox_id,
              n.send_date, n.draft,
              n.data,
              n.notification_type_id
            from dispatch d
            left join notifications n on d.id = d.notification_id
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inbox', function (Blueprint $table) {
            DB::statement('
                drop view inbox
            ');
        });
    }
}
