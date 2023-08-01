<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class pendaftarController extends Controller
{
    public function form(){
        return view('form');
    }
    public function submit(Request $request){
        // dd($request->all());

        user::create([
            'Nama' => $request->nama,
            'Email' => $request->email,
            'Nomor Whatsapp' => $request->phone,
            'Pekerjaan' => $request->jobs,
        ]);
    }
};