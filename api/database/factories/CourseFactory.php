<?php

use App\Course;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Course::class, function (Faker $faker) {
    return [
        'course_name' => $faker->word,
        'course_description' => $faker->text($maxNbChars = 200),
        'published_date' => $faker->dateTime($max = 'now', $timezone = null),
        'creator_id' =>$faker->numberBetween($min=1, $max=5),
    ];
});
