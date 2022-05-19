<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Answer;
use App\Models\Identify;
use App\Models\Question;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Identify::factory()->count(5)->create()->each(function($identify){
            $faker = Factory::create();
            $questions = Question::all();

            foreach ($questions as $key => $question) {
                switch ($question->type) {
                    case 'A':
                        $propositions = $question->propositions;
                        $title = $propositions[rand(0, count($propositions) - 1)];
                        $newAnswer = Answer::create([
                            'title' => $title,
                            'question_id' => $question->id,
                            'identify_id' => $identify->id,
                        ]);
                        break;
                    case 'B':
                        $randomAnswer = $faker->sentence($nbWords = 6, $variableNbWords = true);
                        $newAnswer = Answer::create([
                            'title' => $randomAnswer,
                            'question_id' => $question->id,
                            'identify_id' => $identify->id,
                        ]);
                        break;
                    case 'C':
                        $randomNumber = rand(1, 5);
                        $newAnswer = Answer::create([
                            'title' => $randomNumber,
                            'question_id' => $question->id,
                            'identify_id' => $identify->id,
                        ]);
                        break;
                    default:
                        break;
                }
                $newAnswer->save();
            }

            // On valide le identify
            $identify->status = true;
            $identify->save();
        });

    }
}
