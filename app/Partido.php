<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model {

	protected $table = 'partidos';
        
        public function categoria() {
        return $this->belongsTo('webfutbol\Categoria','id','categorias_id');
    }
    
     public function jugadores()
    {
        return $this->belongsToMany('webfutbol\Jugador','id','jugadores_id');
    }


}
