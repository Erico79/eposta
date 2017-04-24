<?php

namespace App\Http\Controllers;

use App\Ebox;
use App\PostOffices;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserRegistrationController extends Controller
{
    public function show(){
        $post_offices = PostOffices::all();
        $eboxes = Ebox::all();

        return view('login.registration', [
            'pos' => $post_offices,
            'eboxes' => $eboxes
        ]);
    }

    public function loadPos(){
        $q = request('q');

        $pos = PostOffices::where('postal_code', 'LIKE', '%'.$q.'%')
            ->orWhere('constituency', 'LIKE', '%'.$q.'%')
            ->orWhere('county' , 'LIKE', '%'.$q.'%')
            ->orWhere('office', 'LIKE', '%'.$q.'%')
            ->orWhere('postal_number', 'LIKE', '%'.$q.'%')
            ->get();

        return Response::json($pos);
    }

    public function store(Request $request){
        $this->validate($request, [
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'identity_number' => 'required',
            'mobile_number' => 'required',
            'have_box_no' => 'required',
            'postal_code' => 'required',
            'box_no' => 'required'
        ]);

        // autogenerate some random pin
        $pin = rand(1000, 9999);

        // create user
        $user = new User();
        $user->first_name = $request->fname;
        $user->middle_name = $request->mname;
        $user->last_name = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->pin = $pin;
        $user->identity_number = $request->identity_number;
        $user->date_added = Carbon::now();
        $user->mobile_number = $request->mobile_number;
        $user->save();

        // create box
        $ebox = new Ebox();
        $ebox->box = $request->box_no;
        $ebox->postal_code = PostOffices::find($request->postal_code)->postal_code;
        $ebox->user_id = $user->id;
        $ebox->identity_number = $request->identity_number;
        $ebox->index = 0;
        $ebox->date_added = Carbon::now();
        $ebox->save();

        $request->session()->flash('success', 'Your details have been submitted successfully!');
        return redirect('/register-user');
    }
}
