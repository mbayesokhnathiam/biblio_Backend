<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommentaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('commentaire', function(Blueprint $table)
		{
			$table->foreign('abonne_id')->references('id')->on('abonne')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
		Schema::table('commentaire', function(Blueprint $table)
		{
			$table->dropForeign('commentaire_abonne_id_foreign');
			$table->dropForeign('commentaire_oeuvre_id_foreign');
		});
	}

}
