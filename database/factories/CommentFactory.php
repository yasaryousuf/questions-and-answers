<?php

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'question_id' => rand(1, 10),
        'content' => $faker->sentence(6, true),
    ];
});
