<?php

namespace Database\Factories;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'article' => $this->faker->sentence(200),
            'user_id' =>$this->faker->numberBetween(1,6),
            'category_id' =>$this->faker->numberBetween(1,6),
            'image'=> null,
        ];
    }
}
