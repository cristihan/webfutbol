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
                        $table->string('nombre',50);
			$table->string('apellido_1',50);
                        $table->string('apellido_2',50);
                        $table->date('fecha_nacimiento');
                        $table->integer('telefono');
                        $table->string('email')->unique();
                        $table->string('direccion');
                        $table->integer('cp');
                        $table->string('localidad',50);
                        $table->enum('pierna_habil', ['diestro', 'zurdo','ambidiestro']);
                        $table->enum('posicion', ['portero', 'central','lateral','mediocentro','extremo','delantero']);
                        $table->integer('categoria_id')->unsigned();
			$table->timestamps();
                        //relaciones de la tabla
                        $table->foreign('categoria_id')
				  ->references('id')
				  ->on('categorias')
				  ->onDelete('cascade');
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
