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
                        $table->string('rival',45);
			$table->string('campo',45);
                        $table->enum('estado', ['local', 'visitante']);
                        $table->string('fecha',45);
                        $table->string('jornada',45);
                        $table->string('goles_a_favor',45);
                        $table->string('goles_en_contra',45);
                        $table->string('tarjetas_amarillas',45);
                        $table->string('tarjetas_rojas',45);
                        $table->string('dni',9)->unique();
                        $table->integer('categoria_id')->unsigned();
                        
                        //relacion con tablas
                        $table->foreign('categoria_id')
                        ->references('id')
                        ->on('categorias')
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
		Schema::drop('partidos');
	}

}
