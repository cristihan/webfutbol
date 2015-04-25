<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model {

	protected $table = 'entrenamientos';
        
        public function jugadores()
    {
        return $this->belongsToMany('Jugador','id','jugadores_id');
    }

}
