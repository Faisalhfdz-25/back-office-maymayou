<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function simpan(Request $request)
    {
        $user = Auth::user();
        $bahan = new BahanBaku();
        $success = false;
        $pesan = '';
        if ($request->bahan_id) {
            $cerai = BahanBaku::find($request->bahan_id);
            $keterangan = 'Perbaikan Data';
        } else {
            $keterangan = 'Data Baru';
        }
        DB::beginTransaction();
        try {
            $success = true;
            
        } catch (\Throwable $th) {
            $success = false;
        }
        return response()->json(['success' => $success, 'pesan' => $pesan]);
    }
}
