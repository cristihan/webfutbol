<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrenadores', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->enum('cargo', ['primer_entrenador', 'segundo_entrenador']);
                        $table->integer('user_id')->unsigned();
			$table->integer('categoria_id')->unsigned();
                        
                        //relaciones de la tabla
                        $table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('cascade');
				  
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
		Schema::drop('entrenadores');
	}

}
