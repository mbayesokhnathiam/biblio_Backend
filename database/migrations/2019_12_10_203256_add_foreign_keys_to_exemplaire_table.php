<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExemplaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exemplaire', function(Blueprint $table)
		{
			$table->foreign('abonnement_id')->references('id')->on('abonnement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('oeuvre_id')->references('id')->on('oeuvre')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exemplaire', function(Blueprint $table)
		{
			$table->dropForeign('exemplaire_abonnement_id_foreign');
			$table->dropForeign('exemplaire_oeuvre_id_foreign');
		});
	}

}
