<?php namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model {

    
       /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'perfiles';
        
        /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'apellidos', 'telefono','email', 'direccion', 'cp','localidad'];
        
        
        public function user() {
            return $this->belongsTo('webfutbol\User');
            
        }

}
