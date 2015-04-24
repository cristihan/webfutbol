<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorPartidoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jugador_partido', function(Blueprint $table)
		{
			
                        $table->integer('partido_id')->unsigned();
                        $table->integer('jugador_id')->unsigned();                   
                        $table->integer('titular');
                        $table->integer('minutos_jugados');
                        $table->integer('goles_favor');
                        $table->integer('goles_contra');
                        $table->integer('tarjetas_amarillas');
                        $table->integer('tarjetas_rojas');
			$table->timestamps();
                        // Relaciones
			$table->foreign('jugador_id')
				  ->references('id')
				  ->on('jugadores')
				  ->onDelete('cascade');
				  
			$table->foreign('partido_id')
			      ->references('id')
			      ->on('partidos')
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
		Schema::drop('jugador_partido');
	}

}
