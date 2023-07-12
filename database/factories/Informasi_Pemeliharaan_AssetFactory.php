<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Informasi_Pemeliharaan_Asset;
use Illuminate\Database\Eloquent\Factories\Factory;

class Informasi_Pemeliharaan_AssetFactory extends Factory
{
    protected $model = Informasi_Pemeliharaan_Asset::class;
    public function definition(): array
    {
        return [
            'asset_id' => Asset::factory(),
            'riwayat_perbaikan' => $this->faker->paragraph,
            'jadwal_pemeliharaan' => $this->faker->date(),
        ];
    }
}
