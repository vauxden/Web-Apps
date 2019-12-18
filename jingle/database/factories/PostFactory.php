<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'post' => $faker->paragraph(4),
        'likes' => $faker->numberBetween (10,100),
        'user_id'=>App\User::inRandomOrder()->first()->id,
        //'tag_id'=>App\Tag::inRandomOrder()->first()->id,
            //
    ];
});
