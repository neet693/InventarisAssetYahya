<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Informasi_Pemeliharaan_Asset;
use App\Models\JenisAsset;
use App\Models\Peminjaman_Asset;
use Illuminate\Http\Request;

class InformasiPemeliharaanAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_assets = JenisAsset::count();
        $peminjamans = Peminjaman_Asset::orderBy('created_at', 'desc')->take(5)->get();
        $pemeliharaans = Informasi_Pemeliharaan_Asset::latest()->take(7)->get();
        $assets = Asset::all();
        $assetBaik = Asset::where('kondisi', 'like', '%Baik%')->get();
        $assetRusak = Asset::where('kondisi', 'like', '%Rusak%')->get();
        $assetMaintenance = Asset::where('kondisi', 'like', '%Perlu Pemeliharaan%')->get();
        return view('Pemeliharaan.index', compact('jenis_assets', 'peminjamans', 'assets', 'assetBaik', 'assetRusak', 'assetMaintenance', 'pemeliharaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Informasi_Pemeliharaan_Asset $informasi_Pemeliharaan_Asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informasi_Pemeliharaan_Asset $informasi_Pemeliharaan_Asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informasi_Pemeliharaan_Asset $informasi_Pemeliharaan_Asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informasi_Pemeliharaan_Asset $informasi_Pemeliharaan_Asset)
    {
        //
    }
}
