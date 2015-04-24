<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenamientoJugadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrenamiento_jugador', function(Blueprint $table)
		{
			$table->integer('jugador_id')->unsigned();
                        $table->integer('entrenamiento_id')->unsigned();
                        $table->integer('asistencia');
                        $table->enum('motivo', ['lesionado', 'enfermo','estudios','seleccion','vacaciones', 'sin_motivo']);
			$table->timestamps();
                        
                        // Relaciones
			$table->foreign('jugador_id')
				  ->references('id')
				  ->on('jugadores')
				  ->onDelete('cascade');
				  
			$table->foreign('entrenamiento_id')
			      ->references('id')
			      ->on('entrenamientos')
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
		Schema::drop('entrenamiento_jugador');
	}

}
