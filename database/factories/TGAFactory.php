<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TGA>
 */
class TGAFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'jdl_tga' => fake()->sentence(5),
            'laporan' => fake()->sentence(5),
            'link_git' => fake()->sentence(5),
        ];
    }
}
