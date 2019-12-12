<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbonneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abonne', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('numAbonne', 10);
			$table->string('cin', 20);
			$table->string('nom', 30);
			$table->string('prenom', 30);
			$table->string('adresse', 30);
			$table->string('email', 30);
			$table->string('tel', 9);
			$table->string('login', 20);
			$table->string('mdp', 400);
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
		Schema::drop('abonne');
	}

}
