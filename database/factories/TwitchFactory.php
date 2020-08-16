<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\twitch;
use Faker\Generator as Faker;

$factory->define(twitch::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body'=> $faker->sentence
    ];
});
