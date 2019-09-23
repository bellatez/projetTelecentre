<?php

use App\Models\Education\Levels;
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
        	"Beginner",
        	"Intermediate",
        	"Advanced"
        ];
        foreach($districts as $district){
            Levels::create([
                'name'=>$district
            ]);
        }
    }
}
