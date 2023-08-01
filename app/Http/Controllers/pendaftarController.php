<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class pendaftarController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validasi data input 
        $request->validate([
            'nama' => 'required|string|max:60',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:15',
            'jobs' => 'required|string|max:60',
        ]);
        Pendaftaran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'jobs' => $request->jobs,
            'instagram' => $request->has('checkbox1'),
            'website' => $request->has('checkbox2'),
            'perusahaan' => $request->has('checkbox3'),
        ]);

        
        return redirect()->route('submit');
    }
}