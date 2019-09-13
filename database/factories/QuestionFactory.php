<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'title' => $faker->sentence(6, true),
        'content' => $faker->text(200),
    ];
});
