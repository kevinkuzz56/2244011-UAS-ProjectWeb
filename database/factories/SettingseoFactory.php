<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Settingseo>
 */
class SettingseoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meta_title' => fake()->sentence(10),
            'meta_description' => fake()->sentence(20),
            'meta_keywords' => implode(', ', fake()->words(10)),
            'robots'=> fake()->randomElement(['index', 'follow', 'noindex', 'nofollow']),
        ];
    }
}
