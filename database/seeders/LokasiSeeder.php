<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unitTK = Unit::where('nama', 'Unit TK')->first();
        $unitSD = Unit::where('nama', 'Unit SD')->first();
        $unitSMP = Unit::where('nama', 'Unit SMP')->first();
        $unitSMA = Unit::where('nama', 'Unit SMA')->first();
        $unitSarpras = Unit::where('nama', 'Unit Sarpras')->first();
        $unitIT = Unit::where('nama', 'Unit IT')->first();

        Lokasi::create(['nama' => 'Lokasi A', 'unit_id' => $unitTK->id]);
        Lokasi::create(['nama' => 'Lokasi B', 'unit_id' => $unitSD->id]);
        Lokasi::create(['nama' => 'Lokasi C', 'unit_id' => $unitSMP->id]);
        Lokasi::create(['nama' => 'Lokasi D', 'unit_id' => $unitSMA->id]);
        Lokasi::create(['nama' => 'Lokasi E', 'unit_id' => $unitSarpras->id]);
        Lokasi::create(['nama' => 'Lokasi F', 'unit_id' => $unitIT->id]);
    }
}
