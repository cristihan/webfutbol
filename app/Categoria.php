<?php

namespace webfutbol;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table = 'categorias';

    public function entrenador() {
        return $this->hasMany('webfutbol\Entrenador');
    }

}
