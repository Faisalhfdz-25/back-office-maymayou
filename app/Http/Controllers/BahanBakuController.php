<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function index(){
        return view('bahanbaku.index');
    }
}
