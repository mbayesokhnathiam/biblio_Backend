<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOeuvreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('oeuvre', function(Blueprint $table)
		{
			$table->foreign('categorie_id')->references('id')->on('categorie')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('section_id')->references('id')->on('section')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('oeuvre', function(Blueprint $table)
		{
			$table->dropForeign('oeuvre_categorie_id_foreign');
			$table->dropForeign('oeuvre_section_id_foreign');
		});
	}

}
