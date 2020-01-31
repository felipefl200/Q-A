<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraphs(rand(3, 7), true),
        'user_id' => \App\Models\User::pluck('id')->random(),
//        'votes_count' => rand(0, 5),
        'question_id' => \App\Models\Question::pluck('id')->random()
    ];
});
