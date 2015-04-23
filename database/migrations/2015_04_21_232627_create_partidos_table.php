<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partidos', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('rival',50);
			$table->string('campo',50);
                        $table->enum('local_visitante', ['local', 'visitante']);
                        $table->date('fecha');
                        $table->integer('jornada');
                        $table->integer('goles_a_favor');
                        $table->integer('goles_en_contra');
                        $table->integer('tarjetas_amarillas');
                        $table->integer('tarjetas_rojas');
                        $table->string('dni',9)->unique();
                        $table->integer('categoria_id')->unsigned();
			$table->timestamps();
                        //relacion con tablas
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
		Schema::drop('partidos');
	}

}
