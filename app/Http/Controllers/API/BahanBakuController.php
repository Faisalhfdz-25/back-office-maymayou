<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function index(){
        $bahanbaku = BahanBaku::all();
        return response()->json([
            'status' => 'success',
            'message' => 'All Bahan Baku fetched successfully',
            'data' => $bahanbaku
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'satuan' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer'
        ]);

        $bahanbaku = BahanBaku::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Bahan Baku created successfully',
            'data' => $bahanbaku
        ], 201);
    }


    public function show($id)
    {
            $bahanBaku = BahanBaku::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Bahan Baku fetched successfully',
                'data' => $bahanBaku
            ], 200);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'satuan' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer'
        ]);

        $bahanBaku = BahanBaku::findOrFail($id);
        $bahanBaku->update($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Bahan Baku updated successfully',
            'data' => $bahanBaku
        ], 200);

    }

    public function destroy($id)
    {
        $bahanBaku = BahanBaku::findOrFail($id);
        $bahanBaku->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Bahan Baku deleted successfully',
            'data' => null
        ], 204);
    }
}
