<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model {

	protected $table = 'perfiles';
        
        public function user() {
            return $this->belongsTo('webfutbol\User');
            
        }

}
