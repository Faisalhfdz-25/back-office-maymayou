<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\JenisKategori;
use App\Models\KelasProduk;
use App\Models\PenggunaanProduk;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryListController extends Controller
{
    public function index(){
        $data = Inventory::all();
        $kelas = KelasProduk::orderBy('id','ASC')->get();
        $penggunaan = PenggunaanProduk::orderBy('id','ASC')->get();
        $jenis = JenisKategori::orderBy('id','ASC')->get();
        $tempat = Supplier::orderBy('id','ASC')->get();
        return view('inventorylist.index',compact('data','kelas','penggunaan','jenis','tempat'));
    }

    public function simpan(Request $request)
    {
        dd($request->all());
        $data = new Inventory();        
        DB::beginTransaction();
        try {
            $data->nama = $request->nama;
            $data->keterangan = $request->keterangan;
            if ($data->save()) {
                DB::commit();
            } else {
                DB::rollback();
            }
        } catch (\Throwable $th) {
            DB::rollback();
        }
        return redirect('/jenis-kategori')->with('Save','Data Berhasil Disimpan');
    }

    public function hapus(Request $request)
    {
        $data = Inventory::where('id', $request->id)->first();
        if (!$data) {
            return 'false';
        }
        if ($data->delete()) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function getdetail(Request $request)
    {
        $data = JenisKategori::find($request->id);
        if (!$data) {
            return false;
        }
        $data->nama = $data->nama;
        $data->keterangan = $data->keterangan;
        return $data;
    }

    public function update(Request $request)
    {
        $data = JenisKategori::find($request->id);       
        DB::beginTransaction();
        try {
            $data->nama = $request->nama;
            $data->keterangan = $request->keterangan;
            if ($data->update()) {
                DB::commit();
            } else {
                DB::rollback();
            }
        } catch (\Throwable $th) {
            DB::rollback();
        }
        return redirect('/jenis-kategori')->with('Save','Data Berhasil Disimpan');
    }
}
