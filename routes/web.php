<?php

use App\Http\Controllers\BahanBakuController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::controller(BahanBakuController::class)->group(function(){
    Route::get('bahanbaku','index');
    Route::get('bahanbaku/getdata','getdata');
    Route::post('/bahanbaku/simpan', 'simpan');


    
});