<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Section
 *
 * @property int $id
 * @property string $libelle
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $oeuvres
 * @property \Illuminate\Database\Eloquent\Collection $armoires
 *
 * @package App\Models
 */
class Section extends BaseModel
{
	protected $table = 'section';

	protected $fillable = [
		'libelle'
	];

	public function oeuvres()
	{
		return $this->hasMany(\App\Models\Oeuvre::class);
	}

	public function armoires()
	{
		return $this->belongsToMany(\App\Models\Armoire::class, 'section_armoire')
					->withPivot('id')
					->withTimestamps();
	}
}
