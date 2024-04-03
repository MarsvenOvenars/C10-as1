<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();

        $createdAt = fake()->dateTimeBetween('-6 months', 'now');
        return [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'title' => fake()->paragraph(rand(1, 3)),
            'content' => fake()->paragraph(rand(1, 3)),
            'view_count' => fake()->numberBetween(100, 500) * 1000,
            'like_count' => fake()->numberBetween(100, 500) * 1000,
            'published_at' => Carbon::parse($createdAt),
            'created_at' => Carbon::parse($createdAt),
            'updated_at' => Carbon::parse($createdAt)->addDays(rand(0, 6))->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
        ];
    }
}
