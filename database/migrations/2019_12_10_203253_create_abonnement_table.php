<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbonnementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abonnement', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('numero', 10);
			$table->date('DateAbonnement');
			$table->date('DateFinAbonnementPrevu');
			$table->date('DateReelleFinAbonnement');
			$table->boolean('etat');
			$table->bigInteger('abonne_id')->unsigned()->index('abonnement_abonne_id_foreign');
            $table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('abonnement');
	}

}
