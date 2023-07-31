<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Peminjaman_Asset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = Asset::all();

        foreach ($assets as $asset) {
            Peminjaman_Asset::create([
                'asset_id' => $asset->id,
                'tanggal_peminjaman' => '2023-01-01',
                'nama_peminjam' => 'John Doe',
                'tanggal_pengembalian' => '2023-01-10',
                'status_peminjaman' => 'dikembalikan',
            ]);
        }
    }
}
