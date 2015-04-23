<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('padres', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('jugador_id')->unsigned();
                        $table->string('nombre',50);
			$table->string('apellido_1',50);
                        $table->string('apellido_2',50);
                        $table->integer('telefono');
			$table->string('email')->unique();
			$table->timestamps();
                        //relaciones de la tabla
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
		Schema::drop('padres');
	}

}
