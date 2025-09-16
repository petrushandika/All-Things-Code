<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'completed' => $this->faker->boolean(20),
        ];
    }

    /**
     * @return static
     */
    public function completed(): static {
        return $this->state(fn(array $attributes) => [
            'completed' => true,
        ]);
    }

    public function pending(): static {
        return $this->state(fn(array $attributes) => [
            'completed' => false,
        ]);
    }
}
