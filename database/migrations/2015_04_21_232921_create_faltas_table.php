<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaltasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faltas', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->date('fecha');
                        $table->enum('estado', ['justificado', 'no_justificado']);
                        $table->enum('motivo', ['lesionado', 'enfermo','estudios','seleccion','vacaciones','sin_motivo']);
                        $table->integer('jugador_id')->unsigned();
			$table->timestamps();
                         // Relaciones
			$table->foreign('jugador_id')
				  ->references('id')
				  ->on('jugadores')
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
		Schema::drop('faltas');
	}

}
