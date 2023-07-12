<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\JenisAsset;
use App\Models\Lokasi;
use App\Models\Peminjaman_Asset;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {
        $units = Unit::count();
        // $lokasis = Lokasi::where('unit_id', 1)->count();
        $jenis_assets = JenisAsset::count();
        $peminjamans = Peminjaman_Asset::orderBy('created_at', 'desc')->take(5)->get();
        // $assets = Asset::where('unit_id', 1)->get();

        if($type == 'tk'){
            $assets = Asset::where('unit_id', 1)->get();
            $lokasis = Lokasi::where('unit_id', 1)->count();
            return view('Unit.TK.index', compact('units','lokasis','jenis_assets','peminjamans','assets'));
        }elseif($type == 'sd'){
            $assets = Asset::where('unit_id', 2)->get();
            $lokasis = Lokasi::where('unit_id', 2)->count();
            return view('Unit.SD.index', compact('units','lokasis','jenis_assets','peminjamans','assets'));
        }elseif($type == 'smp'){
            $assets = Asset::where('unit_id', 3)->get();
            $lokasis = Lokasi::where('unit_id', 3)->count();
            return view('Unit.SMP.index', compact('units','lokasis','jenis_assets','peminjamans','assets'));
        }elseif($type == 'sma'){
            $assets = Asset::where('unit_id', 4)->get();
            $lokasis = Lokasi::where('unit_id', 4)->count();
            return view('Unit.SMA.index', compact('units','lokasis','jenis_assets','peminjamans','assets'));
        }elseif($type == 'it'){
            $assets = Asset::where('unit_id', 5)->get();
            $lokasis = Lokasi::where('unit_id', 5)->count();
            return view('Unit.it.index', compact('units','lokasis','jenis_assets','peminjamans','assets'));
        }
        elseif($type == 'sarpras'){
            $assets = Asset::where('unit_id', 6)->get();
            $lokasis = Lokasi::where('unit_id', 6)->count();
            return view('Unit.sarpras.index', compact('units','lokasis','jenis_assets','peminjamans','assets'));
        }else{
            abort(404);
        }
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
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
