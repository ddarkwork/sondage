<?php

namespace Database\Seeders;

use App\Models\Survey;
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
        \App\Models\Survey::factory(20)->create();
    }
}
