<?php namespace webfutbol;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	 protected $fillable = ['email', 'password', 'type'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
        
        public function perfil() {
            return $this->hasOne('webfutbol\Perfil','user_id','id');
            
        }
        
        public function entrenador() {
            return $this->hasOne('webfutbol\Entrenador','user_id','id');
            
        }
        
        public function setPasswordAttribute($value) { //este metodo nos sirve para proteger las contraseñas y guardarlas encriptada
        if (!empty($value)) { // si el password no esta vacio que lo encripte, caso contario no se modifique
            $this->attributes['password'] = bcrypt($value);
        }

//           $this->attributes['password'] = \Has::make($value); existen 2 maneras de encriptar la contraseña
    }

}
