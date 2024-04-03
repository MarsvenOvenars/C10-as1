<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $post = Post::inRandomOrder()->first();
        $createdAt = fake()->dateTimeBetween('-6 weeks', 'now');
        return [
            'user_id' => $user->id,
            'post_id' => $post->id,
            'like_count' => fake()->numberBetween(10, 5000),
            'created_at' => Carbon::parse($createdAt),
            'updated_at' => Carbon::parse($createdAt)->addDays(rand(0, 6))->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
        ];
    }
}
