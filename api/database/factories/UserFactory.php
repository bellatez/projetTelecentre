<?php

use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'location' =>$faker->numberBetween($min=1, $max=3),
        'password' => '$2y$10$No2j7eopg0/WbyKjar9SpeJMuUviazv7pgpkocnbWBmrrwa3OhIvy', // password(secret)
    ];
});
