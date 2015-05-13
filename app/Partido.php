<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model {

	protected $table = 'partidos';
        
        
        /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['rival', 'campo', 'estado','fecha', 'jornada', 'goles_a_favor','goles_en_contra','tarjetas_amarillas','tarjetas_rojas','categoria_id'];
        
        
        public function categoria() {
        return $this->belongsTo('webfutbol\Categoria','categoria_id','id');
    }
    
     public function jugadores()
    {
        return $this->belongsToMany('webfutbol\Jugador','jugador_partido','partido_id','jugador_id')
            ->withPivot('titular', 'minutos', 'goles_favor', 'goles_contra', 'tarjetas_amarillas', 'tarjetas_rojas');
    }
    
    public function convocado($id)
    {
//        dd($id);
        $jugador = $this->jugadores()->find($id);
        return !is_null($jugador);
    }

    
    public function titular($id)
    {
        foreach ($this->jugadores as $jugador) {
            if ($jugador->id == $id AND $jugador->pivot->titular) {
                return true;
            }
        }

        return false;
    }

}
