<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	UsersTableSeeder::class,
        	LibCatTableSeeder::class,
            InfoCatTableSeeder::class,
            LevelsTableSeeder::class,
            LocationTableSeeder::class,
        	CourseTableSeeder::class,
        ]);
    }
}
