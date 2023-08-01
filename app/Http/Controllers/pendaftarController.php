<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendaftarController extends Controller
{
    public function form(){
        return view('form');
    }
    public function submit(Request $request){
        dd($request->all());
    }
}
