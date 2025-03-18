<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class ToDoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker->locale('en_GB');

        return [
            "content" => $faker->sentence(5),
            "completed" => $faker->boolean(),
            "priority" => $faker->randomElement(['low', 'medium', 'high']) // konkrētas 
        ];
    }
}
