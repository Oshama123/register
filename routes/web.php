<?php

use App\Http\Controllers\pendaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;



// Route::get('/form', function () {
//     return view('form');
// });
// Route::get('/submit', function () {
//     return view('submit');
// });
// Route::get('/admin', function () {
//     return view('result');
// });



Route::get('/form',[PendaftarController::class,'form'])->name('form');
Route::get('/result',[PendaftarController::class,'result'])->name('result');
Route::post('/submit',[PendaftarController::class,'submit'])->name('submit');


// Route::put('/submit', [pendaftarController::class, 'submit'])->name('submit-form');
// Route::post('/form', 'PendaftarController@submit');
