<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function index(){
        return view('bahanbaku.index');
    }

    public function getData(Request $request){
        $data = BahanBaku::all();
        foreach($data as $item){
            $item->aksi = '<a href="javascript:void(0);" class="btn btn-sm btn-block btn-warning" onclick="edit(' . $item->id . ')">Edit</a>';
            $item->aksi .= '<a href="javascript:void(0);" class="btn btn-sm btn-block btn-danger" onclick="hapus(' . $item->id . ')">Hapus</a>';

        }
        return response()->json(['data' => $data]);
    }
}
