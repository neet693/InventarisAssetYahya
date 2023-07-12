<?php

namespace Database\Factories;

use App\Models\Lokasi;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class LokasiFactory extends Factory
{
    protected $model = Lokasi::class;
    public function definition(): array
    {
        return [
            'nama' => $this->faker->word,
            'unit_id' => Unit::inRandomOrder()->first()->id,
        ];
    }
}
