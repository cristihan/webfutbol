<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {

	protected $table = 'jugadores';
        
        public function categoria() {
        return $this->belongsTo('webfutbol\Categoria');
    }
    
     public function padre() {
        return $this->belongsTo('webfutbol\Categoria');
    }
    
    public function partidos()
    {
        return $this->belongsToMany('Partido');
    }
    
     public function entrenamientos()
    {
        return $this->belongsToMany('Entrenamiento');
    }

}
