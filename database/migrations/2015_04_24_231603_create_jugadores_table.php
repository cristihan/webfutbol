<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jugadores', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('nombre',45);			
                        $table->string('apellidos',45);
                        $table->string('fecha_nacimiento',45);
                        $table->string('telefono',45);
                        $table->string('email')->unique();
                        $table->string('direccion',45);
                        $table->string('cp',45);
                        $table->string('localidad',45);
                        $table->enum('habilidad', ['diestro', 'zurdo','ambidiestro']);
                        $table->enum('posicion', ['portero', 'central','lateral','mediocentro','extremo','delantero']);
                        $table->integer('categoria_id')->unsigned();
                        $table->integer('padre_id')->unsigned();
                        
                        //relaciones de la tabla
                        $table->foreign('categoria_id')
				  ->references('id')
				  ->on('categorias')
				  ->onDelete('cascade');
                        
                        
                        $table->foreign('padre_id')
				  ->references('id')
				  ->on('padres')
				  ->onDelete('cascade');
                        
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jugadores');
	}

}
