<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

//Route Barangs
Route::get('/Barangs', [BarangController::class,'index']);   
