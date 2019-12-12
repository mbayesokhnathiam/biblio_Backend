<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArmoireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('armoire', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('numero', 20)->unique();
			$table->integer('nbreEtage');
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
		Schema::drop('armoire');
	}

}
