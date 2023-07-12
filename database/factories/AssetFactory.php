<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\JenisAsset;
use App\Models\Lokasi;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;


class AssetFactory extends Factory
{
    protected $model = Asset::class;
    public function definition(): array
    {
        return [
            'nama' => $this->faker->word,
            'kode' => $this->faker->unique()->randomNumber,
            'tanggal_pembelian' => $this->faker->date,
            'deskripsi' => $this->faker->paragraph,
            'kondisi' => $this->faker->randomElement(['Baik', 'Rusak', 'Perlu Pemeliharaan']),
            'jenis_assets_id'=> JenisAsset::inRandomOrder()->first()->id,
            'lokasi_id' => Lokasi::inRandomOrder()->first()->id,
            'unit_id' => Unit::inRandomOrder()->first()->id,
        ];
    }
}
