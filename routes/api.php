<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//posts
Route::apiResource('/supplier', App\Http\Controllers\Api\SupplierController::class);
Route::apiResource('/kategori', App\Http\Controllers\Api\KategoriController::class);
Route::apiResource('/lokasi', App\Http\Controllers\Api\LokasiController::class);
Route::apiResource('/barang', App\Http\Controllers\Api\BarangController::class);
Route::apiResource('/rak', App\Http\Controllers\Api\RakController::class);
// Route::apiResource('/posts', App\Http\Controllers\Api\ProdukController::class);
// Route::apiResource('/posts', App\Http\Controllers\Api\ProdukMasukController::class);
// Route::apiResource('/posts', App\Http\Controllers\Api\ProdukKeluarController::class);
// Route::apiResource('/posts', App\Http\Controllers\Api\LogStokController::class);