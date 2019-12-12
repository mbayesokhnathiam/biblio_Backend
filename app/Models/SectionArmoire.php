<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SectionArmoire
 * 
 * @property int $id
 * @property int $section_id
 * @property int $armoire_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Armoire $armoire
 * @property \App\Models\Section $section
 *
 * @package App\Models
 */
class SectionArmoire extends Eloquent
{
	protected $table = 'section_armoire';

	protected $casts = [
		'section_id' => 'int',
		'armoire_id' => 'int'
	];

	protected $fillable = [
		'section_id',
		'armoire_id'
	];

	public function armoire()
	{
		return $this->belongsTo(\App\Models\Armoire::class);
	}

	public function section()
	{
		return $this->belongsTo(\App\Models\Section::class);
	}
}
