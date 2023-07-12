<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\InformasiPemeliharaanAssetController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PeminjamanAssetController;
use App\Http\Controllers\UnitController;

Route::get('/asset', function () {
    return view('Layouts.master');
});

Route::resource('asset', AssetController::class,);
Route::resource('lokasi', LokasiController::class,);
Route::resource('pemeliharaan', InformasiPemeliharaanAssetController::class,);
Route::resource('peminjaman', PeminjamanAssetController::class,);


Route::get('/unit/{type}', [UnitController::class, 'index'])->name('unit.index');
