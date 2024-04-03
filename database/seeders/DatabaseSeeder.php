<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Category; 
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()
        ->count(50)
        ->create();

        $this->call([
        CategorySeeder::class,
        ]);

        Post::factory()
        ->count(200)
        ->create();

        Comment::factory()
        ->count(500)
        ->create();
    }
}
