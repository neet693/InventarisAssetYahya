<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\JenisAsset;
use App\Models\Lokasi;
use App\Models\Peminjaman_Asset;
use App\Models\Unit;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::count();
        $lokasis = Lokasi::all();
        $jenis_assets = JenisAsset::count();
        $peminjamans = Peminjaman_Asset::orderBy('created_at', 'desc')->take(5)->get();
        $assets = Asset::orderBy('created_at', 'desc')->take(5)->get();
        return view('Lokasi.index', compact('units','lokasis','jenis_assets','peminjamans','assets'));
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
    public function show(Lokasi $lokasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lokasi $lokasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lokasi $lokasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lokasi $lokasi)
    {
        //
    }
}
