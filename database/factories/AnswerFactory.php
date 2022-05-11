<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Question;

class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_id' => Question::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }
}
