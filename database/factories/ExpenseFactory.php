<?php

use Faker\Generator as Faker;

$factory->define(App\Expense::class, function (Faker $faker) {
    return [
        'user_id'   => 1,
        'source'    => $faker->word,
        'amount'    => $faker->randomFloat(2, 1, 10000),
        'month'     => $faker->month,
    ];
});
