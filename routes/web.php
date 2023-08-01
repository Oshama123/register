<?php

use App\Http\Controllers\pendaftarController;
use Illuminate\Support\Facades\Route;



Route::get('/form', function () {
    return view('form');
});
Route::get('/submit', function () {
    return view('submit');
});
Route::get('/admin', function () {
    return view('result');
});



Route::get('/form',[pendaftarController::class,'form'])->name('form');
Route::get('/submit',[pendaftarController::class,'submit'])->name('submit');