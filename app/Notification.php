<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function notificationType(){
        return $this->belongsTo(NotificationType::class);
    }

    public function createDispatch($box_id){
        $dispatch = new Dispatch();
        $dispatch->notification_id = $this->id;
        $dispatch->ebox_id = $box_id;
        $dispatch->date_added = Carbon::now();
        $dispatch->save();
    }
}
