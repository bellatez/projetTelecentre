<?php

use App\Models\Location;
use Illuminate\Database\Seeder;

class LibCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $districts = [
        	"Mathematics",
        	"English",
        	"Farming",
        	"French",
        	"Geography",
        	"Chemistry",
        	"Fishing",
        	'Mathematics',
    	    'Algebra',
    	    'Geometry',
    	    'Science',
    	    'Geography',
    	    'History',
    	    'English',
    	    'Spanish',
    	    'German',
    	    'French',
    	    'Latin',
    	    'Greek',
    	    'Arabic',
    	    'Computer Science',
    	    'Art',
    	    'Economics',
    	    'Music',
    	    'Drama',
    	    'Physical Education'
        ];
        foreach($districts as $district){
            Location::create([
                'district'=>$district
            ]);
        }
    }
    
}
