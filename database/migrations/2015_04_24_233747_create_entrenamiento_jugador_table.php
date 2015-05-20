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
                        $table->enum('asistencia', ['justificada','no_justificada']);
                        $table->enum('motivo', ['lesionado','enfermo', 'estudios','seleccion','vacaciones', 'sin_motivo']); 
                        
                        $table->foreign('jugador_id')
			      ->references('id')
			      ->on('jugadores')
			      ->onDelete('cascade');
                        
                        $table->foreign('entrenamiento_id')
			      ->references('id')
			      ->on('entrenamientos')
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
		Schema::drop('entrenamiento_jugador');
	}

}
