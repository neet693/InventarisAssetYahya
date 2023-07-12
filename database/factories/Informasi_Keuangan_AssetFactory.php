<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Informasi_Keuangan_Asset;
use Illuminate\Database\Eloquent\Factories\Factory;

class Informasi_Keuangan_AssetFactory extends Factory
{
    protected $model = Informasi_Keuangan_Asset::class;
    public function definition(): array
    {
        return [
            'asset_id' => Asset::factory(),
            'harga' => $this->faker->randomFloat(2, 1000, 10000),
            'metode_pembayaran' => $this->faker->randomElement(['Tunai', 'Kredit']),
            'nilai_sisa' => $this->faker->randomFloat(2, 100, 1000),
            'metode_depresiasi' => $this->faker->randomElement(['Garis Lurus', 'Saldo Menurun']),
            'umur_ekonomis' => $this->faker->numberBetween(5, 20),
            'tanggal_mulai_depresiasi' => $this->faker->date,
            'tarif_depresiasi' => $this->faker->randomFloat(2, 0.1, 0.5),
        ];
    }
}
