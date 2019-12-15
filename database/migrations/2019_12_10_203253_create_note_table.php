<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('note', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('NombreEtoile');
			$table->bigInteger('abonne_id')->unsigned()->index('note_abonne_id_foreign');
			$table->bigInteger('oeuvre_id')->unsigned()->index('note_oeuvre_id_foreign');
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
		Schema::drop('note');
	}

}
