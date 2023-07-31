<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Peminjaman_Asset;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman_Asset>
 */
class Peminjaman_AssetFactory extends Factory
{
    protected $model = Peminjaman_Asset::class;
    public function definition(): array
    {
        return [
            'asset_id' => Asset::factory(),
            'unit_id' => Unit::inRandomOrder()->first()->id,
            'tanggal_peminjaman' => $this->faker->date,
            'nama_peminjam' => $this->faker->name,
            'tanggal_pengembalian' => $this->faker->date,
            'status_peminjaman' => $this->faker->randomElement(['dipinjam', 'dikembalikan']),
        ];
    }
}
