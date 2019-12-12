<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Armoire
 * 
 * @property int $id
 * @property string $numero
 * @property int $nbreEtage
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $sections
 *
 * @package App\Models
 */
class Armoire extends Eloquent
{
	protected $table = 'armoire';

	protected $casts = [
		'nbreEtage' => 'int'
	];

	protected $fillable = [
		'numero',
		'nbreEtage'
	];

	public function sections()
	{
		return $this->belongsToMany(\App\Models\Section::class, 'section_armoire')
					->withPivot('id')
					->withTimestamps();
	}
}
