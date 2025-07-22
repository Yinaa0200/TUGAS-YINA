<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = BarangModel::all();
        return view('welcome', compact('barangs'));
    }
}
