<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commentaire', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('libelle', 30);
			$table->bigInteger('abonne_id')->unsigned()->index('commentaire_abonne_id_foreign');
			$table->bigInteger('oeuvre_id')->unsigned()->index('commentaire_oeuvre_id_foreign');
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
		Schema::drop('commentaire');
	}

}
