<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index(){
        return view('supplier.index');
    }

    public function getData(){
        $data = Supplier::all();
        foreach($data as $item){
            $item->aksi = '<a href="javascript:void(0);" class="btn btn-sm btn-block btn-secondary" onclick="edit(' . $item->id . ')">Edit</a>';
        }
        return response()->json(['data' => $data]);
    }

    public function simpan(Request $request)
    {
        $user = Auth::user();
        $data = new Supplier();
        $success = false;
        $pesan = '';
        if ($request->supplier_id) {
            $cerai = Supplier::find($request->supplier_id);
            $keterangan = 'Perbaikan Data';
        } else {
            $keterangan = 'Data Baru Pengajuan';
        }
        DB::beginTransaction();
        try {
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            
            if ($cerai->save()) {
                $success = true;
                DB::commit();
            } else {
                $success = false;
                DB::rollback();
            }
        } catch (\Throwable $th) {
            $success = false;
            DB::rollback();
        }
        return response()->json(['success' => $success, 'pesan' => $pesan]);
    }

    public function hapus(Request $request)
    {
        $cerai = Supplier::where('id', $request->id)->first();
        if (!$cerai) {
            return 'false';
        }
        if ($cerai->delete()) {
            return 'true';
        } else {
            return 'false';
        }
    }
}
