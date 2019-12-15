<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOeuvreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oeuvre', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('numeroISBN', 20);
			$table->string('titre', 40);
			$table->string('auteur', 40);
			$table->string('edition', 40);
			$table->date('DateParution');
			$table->text('Resume', 65535);
			$table->integer('QteTotale');
			$table->integer('QteDispo');
			$table->text('image', 65535);
			$table->bigInteger('categorie_id')->unsigned()->index('oeuvre_categorie_id_foreign');
			$table->bigInteger('section_id')->unsigned()->index('oeuvre_section_id_foreign');
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
		Schema::drop('oeuvre');
	}

}
