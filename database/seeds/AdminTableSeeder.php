<?php
use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder{
    
    public function run(){
        
        
             \DB::table('users')->insert(array(
           'name' => 'Cristihan Valdiviezo Mayea',
            'email' => 'cristihan-27@hotmail.com',
            'password' => \Hash::make('secret'),
             'type' => 'administrador'
             ));                 
    }
}