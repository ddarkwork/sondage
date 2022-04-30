<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Answer::factory(20)->create();
        Type::factory(3)->create();
        Question::factory(20)->create();
    }
}
