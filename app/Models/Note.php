<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Note
 *
 * @property int $id
 * @property int $NombreEtoile
 * @property int $abonne_id
 * @property int $oeuvre_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Abonne $abonne
 * @property \App\Models\Oeuvre $oeuvre
 *
 * @package App\Models
 */
class Note extends BaseModel
{
	protected $table = 'note';

	protected $casts = [
		'NombreEtoile' => 'int',
		'abonne_id' => 'int',
		'oeuvre_id' => 'int'
	];

	protected $fillable = [
		'NombreEtoile',
		'abonne_id',
		'oeuvre_id'
	];

	public function abonne()
	{
		return $this->belongsTo(\App\Models\Abonne::class);
	}

	public function oeuvre()
	{
		return $this->belongsTo(\App\Models\Oeuvre::class);
	}
}
