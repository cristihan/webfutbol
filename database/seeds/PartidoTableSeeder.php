<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PartidoTableSeeder extends Seeder{
    
    public function run()
    {
        
        $faker = Faker::create();
           for ($i=0; $i<50; $i ++)
           {              
     \DB::table('partidos')->insert(array(          
            'rival' => 'Barcelona',
            'campo' => 'Camp Nou',
            'estado' => 'Local',
            'fecha' => $faker->dateTime,
            'jornada' => $faker->randomDigit,    
            'goles_a_favor' => $faker->randomDigit,      
            'goles_en_contra' => $faker->randomDigit, 
            'tarjetas_amarillas' => $faker->randomDigit,
            'tarjetas_rojas' => $faker->randomDigit,
            'dni' => '43345677D',       
                   
    ));
           }        
    }
}
