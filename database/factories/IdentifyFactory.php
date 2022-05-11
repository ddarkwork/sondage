<?php

namespace Database\Factories;

use App\Models\Answer;
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
        $answer_id = Answer::inRandomOrder()->first()->id;
        return [
            'answer_id' => $answer_id,
            'token' => $this->faker->unique()->regexify('[A-Za-z0-9._%+-]+[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}'),
        ];
    }
}
