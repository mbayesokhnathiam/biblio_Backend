<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEtatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('etat', function(Blueprint $table)
		{
			$table->foreign('exemplaire_id')->references('id')->on('exemplaire')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('etat', function(Blueprint $table)
		{
			$table->dropForeign('etat_exemplaire_id_foreign');
		});
	}

}
