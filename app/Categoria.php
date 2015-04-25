<?php

namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table = 'categorias';

    public function entrenador() {
        return $this->hasMany('webfutbol\Entrenador');
    }
    
     public function partido() {
        return $this->hasMany('webfutbol\Partido');
    }
    
     public function jugador() {
        return $this->hasMany('webfutbol\Jugador');
    }
    
    

}
