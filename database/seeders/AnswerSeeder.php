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
        Answer::factory(20)->create();
        Identify::factory(20)->create();
    }
}
