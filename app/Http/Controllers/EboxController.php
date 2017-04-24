<?php

namespace App\Http\Controllers;

use App\Ebox;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EboxController extends Controller
{
    public function index(){
        $user = Auth::user();
        $my_boxes = Ebox::where('user_id', $user->id)->get();

        return view('eboxes.index', [
            'eboxes' => $my_boxes
        ]);
    }

    public function get(Ebox $ebox){
        return $ebox;
    }

    public function store(Request $request){
        $user = Auth::user();
        $this->validate($request, [
            'box' => 'required|unique:eboxes',
            'postal_code' => 'required|numeric'
        ]);

        $ebox = new Ebox();
        $ebox->box = $request->box;
        $ebox->postal_code = $request->postal_code;
        $ebox->user_id = $user->id;
        $ebox->identity_number = $user->identity_number;
        $ebox->date_added = Carbon::now();
        $ebox->save();

        $request->session()->flash('success', 'The Box has been added');
        return redirect('user/eboxes');
    }

    public function update(Request $request){
        $this->validate($request, [
            'box' => 'required|unique:eboxes,id,'.$request->edit_id,
            'postal_code' => 'required|numeric'
        ]);

        $ebox_id = $request->edit_id;

        $ebox = Ebox::find($ebox_id);
        $ebox->box = $request->box;
        $ebox->postal_code = $request->postal_code;
        $ebox->save();

        $request->session()->flash('success', 'The Box has been updated');
        return redirect('user/eboxes');
    }

    public function destroy(Request $request){
        Ebox::destroy([$request->delete_ids]);
        $request->session()->flash('success', 'Deletion was successful!');
        return redirect('user/eboxes');
    }
}
