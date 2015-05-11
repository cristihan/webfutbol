<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PadreTableSeeder extends Seeder{
    
    public function run(){
        
        $faker = Faker::create();

        for ($i = 1; $i <= 16; $i++) {
            \DB::table('padres')->insert(array(
                'nombre' => $faker->name,
                'apellidos' => $faker->lastName,
                'telefono' => $faker->phoneNumber,
                'email' => $faker->email
            ));
        }
    }
}