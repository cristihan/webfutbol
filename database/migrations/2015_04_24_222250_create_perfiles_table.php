<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfiles', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('nombre',45);			
                        $table->string('apellidos',45);
                        $table->string('telefono',45);			
                        $table->string('direccion',45);
                        $table->string('cp',45);
                        $table->string('localidad',45);
                        $table->integer('user_id')->unsigned();
                        
                        $table->foreign('user_id')
			      ->references('id')
			      ->on('users')
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
		Schema::drop('perfiles');
	}

}
