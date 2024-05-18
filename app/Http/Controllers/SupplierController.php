<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index(){
        $data = Supplier::all();
        return view('supplier.index',compact('data'));
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
        $data = new Supplier();        
        DB::beginTransaction();
        try {
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            if ($data->save()) {
                DB::commit();
            } else {
                DB::rollback();
            }
        } catch (\Throwable $th) {
            DB::rollback();
        }
        return redirect('/supplier')->with('Save','Data Berhasil Disimpan');
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

    public function getdetail(Request $request)
    {
        $data = Supplier::find($request->id);
        if (!$data) {
            return false;
        }
        $data->nama = $data->nama;
        $data->alamat = $data->alamat;
        return $data;
    }

    public function update(Request $request)
    {
        $data = Supplier::find($request->id);       
        DB::beginTransaction();
        try {
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            if ($data->update()) {
                DB::commit();
            } else {
                DB::rollback();
            }
        } catch (\Throwable $th) {
            DB::rollback();
        }
        return redirect('/supplier')->with('Save','Data Berhasil Disimpan');
    }
}
