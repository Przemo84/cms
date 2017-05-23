<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Commentary::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->firstNameFemale,
        'comment' => $faker->sentence(8),
        'article_id' => function () {
            return factory(App\Article::class)->create()->id;
        }

    ];
});
