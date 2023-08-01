<?php

use App\Http\Controllers\pendaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;



Route::get('/form', function () {
    return view('form');
});
// Route::get('/submit', function () {
//     return view('submit');
// });
Route::get('/admin', function () {
    return view('result');
});



Route::get('/form',[pendaftarController::class,'form'])->name('form');
Route::post('/submit',[pendaftarController::class,'submit'])->name('submit');


Route::put('/submit-form', [pendaftarController::class, 'submitForm'])->name('submit-form');
Route::post('/form', 'PendaftarController@submitForm');
