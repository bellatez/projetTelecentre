<?php

use App\Lesson;
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

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'lesson_title' => $faker->word,
        'lesson_level' => 'intermediate',
        'course_id' => $faker->numberBetween($min=1, $max=5),
        'created_by' =>$faker->numberBetween($min=1, $max=5),
    ];
});
