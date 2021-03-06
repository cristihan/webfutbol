<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('UserTableSeeder');
                 $this->call('AdminTableSeeder');
                 $this->call('CategoriaTableSeeder');
                 $this->call('PadreTableSeeder');
                 $this->call('PartidoTableSeeder');
                 $this->call('JugadorTableSeeder');
                 $this->call('EntrenamientoTableSeeder');
                 $this->call('PerfilTableSeeder');
	}

}
