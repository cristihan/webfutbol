<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EntrenamientoTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i <= 20; $i++) {
            \DB::table('entrenamientos')->insert([             
                'fecha'      => $faker->dateTime('2015-04-25 08:37:17'),
                'campo'      => $faker->randomElement(['campo_1','campo_2']),
                'dias'       => $faker->randomElement(['Lunes','Martes','Miercoles','Jueves','Viernes']),
            ]);
        }
    }

}
