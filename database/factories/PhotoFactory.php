<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'article_id' => Article::factory(),
            'path' => 'photos/' . $this->faker->image('storage/app/public/photos', 800, 600, null, false),
            'caption' => $this->faker->sentence,
        ];
    }
}
