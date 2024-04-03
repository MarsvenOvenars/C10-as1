<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
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
        $createdAt = fake()->dateTimeBetween('-6 weeks', 'now');
        return [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'title' => fake()->title(rand(1, 3)),
            'content' => fake()->paragraph(rand(1, 3)),
            'view_count' => fake()->numberBetween(1, 500),
            'like_count' => fake()->numberBetween(10, 4000),
            'created_at' => Carbon::parse($createdAt),
            'updated_at' => Carbon::parse($createdAt)->addDays(rand(0, 6))->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
        ];
    }
}
