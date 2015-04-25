<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {

	protected $table = 'jugadores';
        
        public function categoria() {
        return $this->belongsTo('webfutbol\Categoria','id','categorias_id');
    }
    
     public function padre() {
        return $this->belongsTo('webfutbol\Padre','id','padres_id');
    }
    
    public function partidos()
    {
        return $this->belongsToMany('Partido','id','partidos_id');
    }
    
     public function entrenamientos()
    {
        return $this->belongsToMany('Entrenamiento','id','entrenamientos_id');
    }

}
