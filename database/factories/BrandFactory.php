<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $word = $this->faker->unique()->word(),
            'slug' => \Illuminate\Support\Str::slug($word, '-'),
            'logo' => rand(false, true) ? $this->faker->uuid() . 'jpg' : null,
        ];
    }
}
