<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model {

	protected $table = 'padres';
        
        
        /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'apellidos', 'telefono','email'];
        
        public function jugador() {
        return $this->hasMany('webfutbol\Jugador','padre_id','id');
    }

}


