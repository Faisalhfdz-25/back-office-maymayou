<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryListController;
use App\Http\Controllers\JenisKategoriController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::middleware('auth')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard','index');
    });

    Route::controller(InventoryListController::class)->group(function(){
        Route::get('/inventory-list','index');
    });
    
    Route::controller(SupplierController::class)->group(function(){
        Route::get('/supplier','index');
        Route::get('/supplier/getData','getData');
        Route::post('/supplier/hapus', 'hapus');
        Route::post('/supplier/simpan', 'simpan');
        Route::post('/supplier/update', 'update');
        Route::get('/supplier/getDetail', 'getdetail');
    });

    Route::controller(JenisKategoriController::class)->group(function(){
        Route::get('/jenis-kategori','index');
        Route::get('/jenis-kategori/getData','getData');
        Route::post('/jenis-kategori/hapus', 'hapus');
        Route::post('/jenis-kategori/simpan', 'simpan');
        Route::post('/jenis-kategori/update', 'update');
        Route::get('/jenis-kategori/getDetail', 'getdetail');
    });
});