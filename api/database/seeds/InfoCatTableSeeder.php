<?php

use App\Models\Information\Info_Cat;
use Illuminate\Database\Seeder;

class InfoCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
        	"Local News",
        	"Announcements",
        	"National News",
        	"Advertisements"
        ];
        foreach($districts as $district){
            Info_Cat::create([
                'name'=>$district
            ]);
        }
    }
}
