<?php

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$districts = [
        	"Mayo-Oulo",
        	"Bibemi",
        	"Mandama",
        	"Idenau"
        ];
        foreach($districts as $district){
            Location::create([
                'district'=>$district
            ]);
        }
    }
}
