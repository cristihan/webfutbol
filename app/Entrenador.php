<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model {

	protected $table = 'entrenadores';
        
        public function user() {
            return $this->belongsTo('webfutbol\User');
            
        }

        public function categoria() {
            return $this->belongsTo('webfutbol\Categoria','entrenador_id','id');
            
        }
}
