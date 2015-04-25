<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model {

	protected $table = 'entrenamientos';
        
        /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['fecha'];
        
        
        
        public function jugadores()
    {
        return $this->belongsToMany('webfutbol\Jugador','entrenamiento_jugador','entrenamiento_id','jugador_id');
    }

}
