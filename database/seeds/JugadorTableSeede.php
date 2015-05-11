<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JugadoresTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i <= 20; $i++) {
            \DB::table('jugadores')->insert([
                'nombre'            => $faker->name,
                'apellidos'         => $faker->lastName,
                'dni'               => $faker->unique()->numberBetween('1234', '9876'),
                'fecha_nacimiento'  => $faker->dateTimeBetween('-15 years', '-10 years'),
                'telefono'          => $faker->phoneNumber,
                'email'             => $faker->email,
                'direccion'         => $faker->address,
                'cp'                => $faker->postcode,
                'localidad'         => $faker->city,
                'habilidad'         => $faker->randomElement(['diestro', 'zurdo', 'ambidiestro']),
                'posicion'          => $faker->randomElement(['portero','central','lateral','mediocentro','extremo','delantero']),
                'categoria_id'      => 1,
                'padre_id'          => $faker->numberBetween(1, 16),
            ]);
        }
    }

}
