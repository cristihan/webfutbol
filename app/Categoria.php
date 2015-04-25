<?php

namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table = 'categorias';

    public function entrenador() {
        return $this->hasMany('webfutbol\Entrenador','entrenador_id','id');
    }
    
     public function partido() {
        return $this->hasMany('webfutbol\Partido','partido_id','id');
    }
    
     public function jugador() {
        return $this->hasMany('webfutbol\Jugador','jugador_id','id');
    }
    
    

}
