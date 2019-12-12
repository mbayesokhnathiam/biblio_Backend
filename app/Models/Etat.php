<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Etat
 * 
 * @property int $id
 * @property string $libelle
 * @property \Carbon\Carbon $dateEdition
 * @property int $exemplaire_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Exemplaire $exemplaire
 *
 * @package App\Models
 */
class Etat extends Eloquent
{
	protected $table = 'etat';

	protected $casts = [
		'exemplaire_id' => 'int'
	];

	protected $dates = [
		'dateEdition'
	];

	protected $fillable = [
		'libelle',
		'dateEdition',
		'exemplaire_id'
	];

	public function exemplaire()
	{
		return $this->belongsTo(\App\Models\Exemplaire::class);
	}
}
