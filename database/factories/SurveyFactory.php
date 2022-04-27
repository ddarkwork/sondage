<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->email(),
            'age' => $this->faker->randomDigit(),
            'sex' => $this->faker->word(),
            'family_members' => $this->faker->randomDigit(),
            'job' => $this->faker->word(),
            'used_vr' => $this->faker->word(),
            'vr_content_store' => $this->faker->word(),
            'futur_vr' => $this->faker->word(),
            'bs_users' => $this->faker->randomDigit(),
            'bs_use' => $this->faker->word(),
            'bs_pics_score' => $this->faker->randomDigit(),
            'bs_comfort_score' => $this->faker->randomDigit(),
            'bs_network_score' => $this->faker->randomDigit(),
            'bs_3d_score' => $this->faker->randomDigit(),
            'bs_audio_score' => $this->faker->randomDigit(),
            'bs_notif' => $this->faker->word(),
            'smartphone_use' => $this->faker->word(),
            'record_shows' => $this->faker->randomDigit(),
            'exclusive_games' => $this->faker->randomDigit(),
            'dream_features' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }
}
