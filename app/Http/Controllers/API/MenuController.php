<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return response()->json($menus);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'foto' => 'nullable|string',
            'resep' => 'nullable|string',
            'kategori' => 'nullable|string',
            'harga' => 'required|numeric',
            'hpp' => 'required|numeric',
        ]);

        $menu = Menu::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Menu created successfully',
            'data' => $menu
        ], 201);
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'foto' => 'nullable|string',
            'resep' => 'nullable|string',
            'kategori' => 'nullable|string',
            'harga' => 'required|numeric',
            'hpp' => 'required|numeric',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->update($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Menu updated successfully',
            'data' => $menu
        ], 201);
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Menu deleted successfully',
            'data' => null
        ], 200);
    }

    // Show Resep
    public function showResep($id)
    {
        $menu = Menu::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Resep Fecthed Successfully',
            'data' =>  [
                'nama' => $menu->nama,
                'resep' => $menu->resep,
            ]
        ], 200);
    }
}
