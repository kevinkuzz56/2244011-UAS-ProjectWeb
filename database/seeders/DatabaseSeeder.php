<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        \App\Models\Category::factory(30)->create();
        \App\Models\Banner::factory(30)->create();
        \App\Models\Settingseo::factory(30)->create();
        \App\Models\Page::factory(30)->create();

        User::factory()->create([
            'name' => 'Kevin Kus',
            'email' => 'kusumabit39@gmail.com',
            'password' => bcrypt('cryptbit497'),
        ]);
    }
}
