<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSectionArmoireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('section_armoire', function(Blueprint $table)
		{
			$table->foreign('armoire_id')->references('id')->on('armoire')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
		Schema::table('section_armoire', function(Blueprint $table)
		{
			$table->dropForeign('section_armoire_armoire_id_foreign');
			$table->dropForeign('section_armoire_section_id_foreign');
		});
	}

}
