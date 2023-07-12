<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Informasi_Pemeliharaan_Asset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformasiPemeliharaanAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = Asset::all();

        foreach ($assets as $asset) {
            Informasi_Pemeliharaan_Asset::create([
                'asset_id' => $asset->id,
                'riwayat_perbaikan' => 'Riwayat perbaikan asset',
                'jadwal_pemeliharaan' => 'Jadwal pemeliharaan asset',
            ]);
        }
    }
}
