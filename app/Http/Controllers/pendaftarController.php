<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftarController extends Controller
{
    public function form() {
        return view ('form');
    }
    public function submit(Request $request)
    {
        // Validasi data input 
        $request->validate([
            'nama' => 'required|string|max:60',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:15',
            'jobs' => 'required|string|max:60',
        ]);
        // Pendaftaran::create([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'jobs' => $request->jobs,
        //     'instagram' => $request->has('checkbox1'),
        //     'website' => $request->has('checkbox2'),
        //     'perusahaan' => $request->has('checkbox3'),
        // ]);
        $pendaftar = new Pendaftaran();
        $pendaftar->nama = $request->nama;
        $pendaftar->email = $request->email;
        $pendaftar->phone = $request->phone;
        $pendaftar->jobs = $request->jobs;
        $pendaftar->instagram = $request->has('checkbox1');
        $pendaftar->website = $request->has('checkbox2');
        $pendaftar->perusahaan = $request->has('checkbox3');

        $pendaftar->save();

        
        return view ('submit');
    }
    public function result() {
        $pendaftars = Pendaftaran::all();

        return view ('result', compact('pendaftars'));

    }
    
}