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
        	"Centre de Sante Integre",
            "Lycee Technique",
            "Lycee Classique",
            "Lycee Bilingue",
        	"Centre des Femmes",
        	"Centre des Jeune",
        	"La Mairie",
            "Le Telecentre",
        ];
        foreach($districts as $district){
            Location::create([
                'district'=>$district
            ]);
        }
    }
}
