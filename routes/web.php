<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Http\Controllers\BarangController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [BarangController::class, 'index']);

//Route Barangs
// Route::get('/Barangs', [BarangController::class,'index']);   
