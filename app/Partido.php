<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model {

	protected $table = 'partidos';
        
        public function categoria() {
        return $this->belongsTo('webfutbol\Categoria');
    }
    
     public function jugadores()
    {
        return $this->belongsToMany('Jugador');
    }


}
