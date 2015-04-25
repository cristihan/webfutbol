<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model {

	protected $table = 'padres';
        
        public function jugador() {
        return $this->hasMany('webfutbol\Jugador');
    }

}
