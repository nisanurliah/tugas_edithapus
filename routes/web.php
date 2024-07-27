<?php

use App\Http\Controllers\PenjualanBarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PenjualanBarangController::class, 'index']);
Route::get('/create', [PenjualanBarangController::class, 'create']);
Route::post('/store', [PenjualanBarangController::class, 'store']);
Route::get('/edit/{penjualan}', [PenjualanBarangController::class, 'edit']);
Route::put('/update/{penjualan}', [PenjualanBarangController::class, 'update']);
Route::delete('/delete/{penjualan}', [PenjualanBarangController::class, 'delete']);
