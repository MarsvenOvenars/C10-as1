<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
        $comment = Comment::with('brand')->inRandomOrder()->first();
        $post = Post::inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'comment_id' => $comment->brand_id,
            'post_id' => $post->id,
            'title' => fake()->paragraph(rand(1, 3)),
            'updated_at' => Carbon::addDays(rand(0, 6))->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
        ];
    }
}
