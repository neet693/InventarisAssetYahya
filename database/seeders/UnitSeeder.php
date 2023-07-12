<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unitNames = ['TK', 'SD', 'SMP', 'SMA', 'IT', 'Sarpras'];

        foreach ($unitNames as $unitName) {
            Unit::create([
                'nama' => $unitName,
            ]);
        }
    }
}
