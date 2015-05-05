<?php
use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder{
    
    public function run(){
        
        
             \DB::table('users')->insert(array(           
            'email' => 'cristihan-27@hotmail.com',
            'password' => \Hash::make('secret'),
             'type' => 'administrador'
             ));                 
    }
}