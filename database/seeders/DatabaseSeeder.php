<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Subject;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(50)
            ->create();

        $this->call([
            CategorySeeder::class,
            CommentSeeder::class,
            PostSeeder::class,
        ]);

        Subject::factory()
            ->count(1000)
            ->create();
    }
}
