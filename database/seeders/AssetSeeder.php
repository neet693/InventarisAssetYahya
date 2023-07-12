<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\JenisAsset;
use App\Models\Lokasi;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasiA = Lokasi::where('nama', 'Unit TK')->first();
        $lokasiB = Lokasi::where('nama', 'Unit SD')->first();
        $unitTK = Unit::where('nama', 'Unit TK')->first();

        Asset::create([
            'nama' => 'Asset 1',
            'kode' => 'AS-001',
            'jenis_asset_id' => 1,
            'tanggal_pembelian' => '2023-01-01',
            'deskripsi' => 'Deskripsi asset 1',
            'kondisi' => 'Baik',
            'lokasi_id' => $lokasiA->id,
            'unit_id' => $unitTK->id,
        ]);

        Asset::create([
            'nama' => 'Asset 2',
            'kode' => 'AS-002',
            'jenis_asset_id' => 2,
            'tanggal_pembelian' => '2023-02-01',
            'deskripsi' => 'Deskripsi asset 2',
            'kondisi' => 'Rusak',
            'lokasi_id' => $lokasiB->id,
            'unit_id' => $unitTK->id,
        ]);

    }
}
