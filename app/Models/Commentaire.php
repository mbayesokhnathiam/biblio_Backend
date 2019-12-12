<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Commentaire
 * 
 * @property int $id
 * @property string $libelle
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
class Commentaire extends Eloquent
{
	protected $table = 'commentaire';

	protected $casts = [
		'abonne_id' => 'int',
		'oeuvre_id' => 'int'
	];

	protected $fillable = [
		'libelle',
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
