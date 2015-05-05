<?php
use Illuminate\Database\Seeder;


class CategoriaTableSeeder extends Seeder{
    
    public function run(){
        
        
             \DB::table('categorias')->insert(array(           
             'nombre' => 'Benjamin'
                 
             ));                 
    }
}