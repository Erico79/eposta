<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        return view('subscriptions.index');
    }

    public function store(Request $request){

    }
}
