<?php
use Illuminate\Database\Seeder;


class PadreTableSeeder extends Seeder{
    
    public function run(){
        
        
             \DB::table('padres')->insert(array(           
            'nombre' => 'Juan',
            'apellidos' => 'Valdiviezo Pinargote',
            'telefono' => '675832728',
             'email' => 'pinargote@hotmail.com'     
             ));                 
    }
}