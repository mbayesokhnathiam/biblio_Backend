<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAbonnementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('abonnement', function(Blueprint $table)
		{
			$table->foreign('abonne_id')->references('id')->on('abonne')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('abonnement', function(Blueprint $table)
		{
			$table->dropForeign('abonnement_abonne_id_foreign');
		});
	}

}
