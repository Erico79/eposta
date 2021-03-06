<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $dev_accs = [];

        return view('lists.index', [
            'dev_accs' => $dev_accs
        ]);
    }
}
