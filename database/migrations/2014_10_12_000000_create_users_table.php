<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('dni',9)->unique();
			$table->string('nombre_usuario');
                        $table->string('password', 60);
                        $table->enum('type', ['administrador', 'entrenador','otro_empleado']);
                        $table->string('nombre',50);
			$table->string('apellido_1',50);
                        $table->string('apellido_2',50);
                        $table->integer('telefono');
			$table->string('email')->unique();
                        $table->string('direccion');
                        $table->integer('cp');
                        $table->string('localidad',50);
                        $table->enum('puesto', ['director', 'coordinador','entrenador','delegado','fisioterapeuta']);
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
