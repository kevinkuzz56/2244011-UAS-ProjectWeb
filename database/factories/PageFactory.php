<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6),
            'slug' => fake()->slug(),
            'content' => fake()->paragraphs(3, true),
            'featured_image' => fake()->imageUrl(),  
            'meta_title' => fake()->sentence(10),
            'meta_description' => fake()->sentence(20),
            'meta_keywords' => implode(', ', fake()->words(10)),
            'is_published' => fake()->boolean(),
            'published_at' => fake()->dateTime(),
            'created_by' => \App\Models\User::factory(),
            'updated_by' => \App\Models\User::factory(),
        ];
    }
}
