<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at' => now(),
            'email' => fake()->unique()->safeEmail(),
            'nim' => fake()->numberBetween(1000000000, 9999999999),
            'nama' => fake()->name(),
            'jurusan' => fake()->text(10),
            'prodi' => fake()->text(10),
            'angkatan' => fake()->numberBetween(2021, 2024),
            'untuk' => $this->faker->randomElement(['forum', 'pembina']),
            'pertanyaan' => fake()->text(100),
            'answered_by' => '-'

        ];
    }
}
