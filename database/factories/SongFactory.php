<?php

namespace Database\Factories;

use App\Models\Song;
use Faker\Provider\ar_JO\Text;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model =Song::class ;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(20),
            'singer'=>$this->faker->name(),
            'genre'=>$this->faker->text(10),
            'releasedat'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'lyrics'=>$this->faker->text(),
            'url'=>'https://www.learningcontainer.com/wp-content/uploads/2020/02/Kalimba.mp3',
            'big_img'=>$this->faker->imageUrl($width = 750, $height = 300),
            'small_img'=>$this->faker->imageUrl($width = 350, $height = 300),
        ];
    }
}
