<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Ebox extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function myBoxes(){
        $my_boxes = $this->where('user_id', Auth::user()->id)->get();

        $user_boxes = [];
        if (count($my_boxes)){
            foreach ($my_boxes as $my_box){
                $user_boxes[] = $my_box->id;
            }
        }

        return $user_boxes;
    }
}
