<?php

namespace App\Http\Controllers;

use App\Ebox;
use App\Notification;
use App\NotificationType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Yajra\Datatables\Datatables;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sent(){
        return view('notifications.sent');
    }

    public function getSent(Ebox $ebox){
        // get user's boxes
        $my_boxes = $ebox->myBoxes();

        $sent_notifications = Notification::whereIn('sender_ebox_id', $my_boxes);

        return Datatables::of($sent_notifications)
            ->addColumn('uploaded_files', function ($notification){
                $data = json_decode($notification->data, true);

                return (!is_null($data['uploaded_files'])) ? $data['uploaded_files'] : '';
            })
            ->editColumn('created_at', function ($notification){
                return Carbon::createFromTimestamp(strtotime($notification->created_at))->diffForHumans();
            })
            ->addColumn('view', '<a href="{{ url("users/notification/view/".$id) }}" class="btn btn-mini btn-info">
                <i class="icon-eye-open"></i> View
            </a>')
            ->rawColumns(['view'])
            ->make(true);
    }

    public function getInbox(Ebox $ebox){
        // get user's boxes
        $my_boxes = $ebox->myBoxes();

        $sent_notifications = Notification::whereIn('sender_ebox_id', $my_boxes);

        return Datatables::of($sent_notifications)
            ->addColumn('uploaded_files', function ($notification){
                $data = json_decode($notification->data, true);

                return (!is_null($data['uploaded_files'])) ? $data['uploaded_files'] : '';
            })
            ->editColumn('created_at', function ($notification){
                return Carbon::createFromTimestamp(strtotime($notification->created_at))->diffForHumans();
            })
            ->make(true);
    }

    public function show()
    {
        $eboxes = Ebox::all();
        $notification_types = NotificationType::all();

        return view('notifications.compose', [
            'eboxes' => $eboxes,
            'notification_types' => $notification_types
        ]);
    }

    public function upload(Request $request){
        $path_data = $this->uploadFiles();
        return Response::json($path_data);
    }

    public function store(Request $request){
        $this->validate($request, [
            'target_boxes' => 'required',
            'notification_type' => 'required'
        ]);

        // create and dispatch nofication
        NotificationType::where('code', $request->notification_type)->first()->createNotification($request);

        $request->session()->flash('success', 'Notification has been submitted.');
        return redirect('/user/notification/compose');
    }

    public function uploadFiles(){
        $path = '';
        if(Input::hasFile('file')){
            $prefix = uniqid();
            $image = Input::file('file');
            $filename = $image->getClientOriginalName();
            $new_name = $prefix.'-'.$filename;

            if($image->isValid()) {
                $image->move('uploads/images', $new_name);
                $path = 'uploads/images/'.$new_name;
            }
        }

        return [
            'path' => $path,
            'file_name' => $filename
        ];
    }
}
