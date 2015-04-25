<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model {

	protected $table = 'entrenadores';
        
        
        /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['cargo'];
        
        public function user() {
            return $this->belongsTo('webfutbol\User');
            
        }

        public function categoria() {
            return $this->belongsTo('webfutbol\Categoria','categoria_id','id');
            
        }
}
