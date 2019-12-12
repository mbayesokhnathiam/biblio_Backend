<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExemplaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exemplaire', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('numero', 20);
			$table->date('dateAcquisition');
			$table->bigInteger('oeuvre_id')->unsigned()->index('exemplaire_oeuvre_id_foreign');
			$table->bigInteger('abonnement_id')->unsigned()->index('exemplaire_abonnement_id_foreign');
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
		Schema::drop('exemplaire');
	}

}
