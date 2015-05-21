<?php

namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table = 'categorias';
    
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = ['nombre'];

    public function entrenador() {
        return $this->hasMany('webfutbol\Entrenador','categoria_id','id');
    }
    
     public function partido() {
        return $this->hasMany('webfutbol\Partido','categoria_id','id');
    }
    
     public function jugador() {
        return $this->hasMany('webfutbol\Jugador','categoria_id','id');
    }  
    
    public function entrenamiento() {
       return $this->hasMany('webfutbol\Entrenamiento','categoria_id','id');
   }
    
}
