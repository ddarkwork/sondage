<?php

namespace Database\Factories;

use App\Models\Answer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdentifyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $answer_id = Answer::inRandomOrder()->first()->id;
        return [
            'url' => Str::random(40),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
