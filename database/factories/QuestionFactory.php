<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(4, 9)), "."),
        'body' => $faker->paragraphs(rand(3, 7), true),
        'views' => rand(0, 10),
//        'answers_count' => rand(0, 15),
//        'votes_count' => rand(-10, 10),
        'user_id' => \App\Models\User::pluck('id')->random()
    ];
});
