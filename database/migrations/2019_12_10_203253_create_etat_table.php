<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etat', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('libelle', 65535);
			$table->date('dateEdition');
			$table->bigInteger('exemplaire_id')->unsigned()->index('etat_exemplaire_id_foreign');
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
		Schema::drop('etat');
	}

}
