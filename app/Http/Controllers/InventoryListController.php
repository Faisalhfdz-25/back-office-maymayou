<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryListController extends Controller
{
    public function index(){
        return view('purchase.inventory.index');
    }
}
