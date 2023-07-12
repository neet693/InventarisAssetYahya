<?php

namespace Database\Factories;

use App\Models\JenisAsset;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisAsset>
 */
class JenisAssetFactory extends Factory
{
    protected $model = JenisAsset::class;
    public function definition(): array
    {
        return [
            'nama'=>$this->faker->name,
        ];
    }
}
