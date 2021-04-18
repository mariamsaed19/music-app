<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'user_name'=>$this->faker->name(),
           'comm'=>$this->faker->text(),
           'releasedat'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
           'song_id'=>$this->faker->numberBetween($min = 1, $max=20)
        ];
    }
}
