
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenamientosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrenamientos', function(Blueprint $table)
		{
			$table->increments('id');                      
                        $table->date('fecha');
                        $table->enum('campo', ['campo_1','campo_2']);
                        $table->enum('dias', ['Lunes','Martes','Miercoles','Jueves','Viernes']);
                        $table->integer('categoria_id')->unsigned();
                        
                        
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
		Schema::drop('entrenamientos');
	}

}
