<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Photo;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Buat 10 user
    User::factory()->count(10)->create();

    // Buat 5 kategori
    Category::factory()->count(5)->create();

    // Buat 50 artikel dengan komentar dan foto
    Article::factory()
        ->count(50)
        ->has(Comment::factory()->count(3))
        ->has(Photo::factory()->count(2))
        ->create();

    // Buat admin
    User::factory()->admin()->create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
    ]);
    }
}
