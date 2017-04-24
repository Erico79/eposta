<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotificationType extends Model
{
    public function notifications(){
        return $this->hasMany(Notification::class);
    }

    public function createNotification($request){
        // get a box of the user
        $user = Auth::user();
        $sender_box = Ebox::where('user_id', $user->id)->first();

        $notification = new Notification();
        $notification->sender_ebox_id = $sender_box->id;
        $notification->subject = $request->subject;
        $notification->message = $request->message;
        $notification->send_date = Carbon::now();
        $notification->message_summary = $request->summary;
        $notification->notification_type_id = $this->id;
        $notification->data = json_encode(request([
            'uploaded_files',
            'amount',
            'mpesa_buss_no',
            'mpesa_account',
            'reference'
        ]));
        $notification->save();

        // dispatch the notifications
        $box_ids = $request->target_boxes;
        if(count($box_ids)){
            foreach ($box_ids as $box_id){
                // dispatch
                Notification::find($notification->id)->createDispatch($box_id);
            }
        }

    }
}
