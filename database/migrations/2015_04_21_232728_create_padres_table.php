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
                        $table->string('nombre',45);
			$table->string('apellidos',45);                       
                        $table->string('telefono',45);
			$table->string('email',45)->unique();
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
		Schema::drop('padres');
	}

}
