<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {

	protected $table = 'jugadores';
        
        /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'apellidos', 'fecha_nacimiento','telefono','email', 'direccion', 'cp','localidad','habilidad','posicion'];
        
        public function categoria() {
        return $this->belongsTo('webfutbol\Categoria','categorias_id','id');
    }
    
     public function padre() {
        return $this->belongsTo('webfutbol\Padre','padres_id','id');
    }
    
    public function partidos()
    {
        return $this->belongsToMany('webfutbol\Partido','partido_jugador','id','jugador_id','partido_id');
    }
    
     public function entrenamientos()
    {
        return $this->belongsToMany('webfutbol\Entrenamiento','entrenamiento_jugador','id','jugador_id','entrenamiento_id');
       
    }

}
