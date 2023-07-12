<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Asset;
use App\Models\Informasi_Keuangan_Asset;
use App\Models\Informasi_Pemeliharaan_Asset;
use App\Models\JenisAsset;
use App\Models\Lokasi;
use App\Models\Peminjaman_Asset;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        JenisAsset::factory(5)->create();
        Unit::factory(6)->create();
        Lokasi::factory(20)->create();
        Asset::factory(50)->create();
        Informasi_Keuangan_Asset::factory(50)->create();
        Informasi_Pemeliharaan_Asset::factory(50)->create();
        Peminjaman_Asset::factory(50)->create();

    }
}
