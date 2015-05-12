<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PerfilTableSeeder extends Seeder{
    
    public function run(){
        
        $faker = Faker::create();
           for ($i=0; $i<10; $i ++){
              
               \DB::table('perfiles')->insert(array(          
                'nombre'            => $faker->firstName,
                'apellidos'         => $faker->lastName,               
                'telefono'          => $faker->phoneNumber,               
                'direccion'         => $faker->address,
                'cp'                => $faker->postcode,
                'localidad'         => $faker->city,             
                'user_id'          => $faker->numberBetween(1, 10),
             ));
           }        
    }
}
