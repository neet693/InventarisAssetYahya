<?php

namespace Database\Seeders;

use App\Models\JenisAsset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisAsset::create(['nama' => 'Laptop']);
        JenisAsset::create(['nama' => 'Printer']);
        JenisAsset::create(['nama' => 'Proyektor']);
    }
}
