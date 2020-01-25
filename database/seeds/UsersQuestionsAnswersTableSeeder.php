<?php

use Illuminate\Database\Seeder;

class UsersQuestionsAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Models\User::class, 15)->create();
        factory(\App\Models\Question::class, 10)->create();
        factory(\App\Models\Answer::class, 250)->create();
    }
}
