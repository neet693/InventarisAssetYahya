<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\JenisAsset;
use App\Models\Lokasi;
use App\Models\Peminjaman_Asset;
use App\Models\Unit;
use Illuminate\Http\Request;

class PeminjamanAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjamans = Peminjaman_Asset::all();
        $assetKembali = Peminjaman_Asset::where('status_peminjaman', 'like', '%Dikembalikan%')->take(7)->get();
        $assetPinjam = Peminjaman_Asset::where('status_peminjaman', 'like', '%Dipinjam%')->get();
        // $assets = Asset::orderBy('created_at', 'desc')->take(5)->get();
        $assets = Asset::all();
        $units = Unit::all();
        return view('Peminjaman.index', compact('peminjamans', 'assets', 'assetPinjam', 'assetKembali', 'units'));
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
    public function show(Peminjaman_Asset $peminjaman_Asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman_Asset $peminjaman_Asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman_Asset $peminjaman_Asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman_Asset $peminjaman_Asset)
    {
        //
    }
}
