<?php

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
//        $this->call(UsersTableSeeder::class);
        factory(\App\Models\User::class, 15)->create();
        factory(\App\Models\Question::class, 10)->create();
        factory(\App\Models\Answer::class, 250)->create();
    }
}
