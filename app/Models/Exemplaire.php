<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Exemplaire
 *
 * @property int $id
 * @property string $numero
 * @property \Carbon\Carbon $dateAcquisition
 * @property int $oeuvre_id
 * @property int $abonnement_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Abonnement $abonnement
 * @property \App\Models\Oeuvre $oeuvre
 * @property \Illuminate\Database\Eloquent\Collection $etats
 *
 * @package App\Models
 */
class Exemplaire extends BaseModel
{
	protected $table = 'exemplaire';

	protected $casts = [
		'oeuvre_id' => 'int',
		'abonnement_id' => 'int'
	];

	protected $dates = [
		'dateAcquisition'
	];

	protected $fillable = [
		'numero',
		'dateAcquisition',
		'oeuvre_id',
		'abonnement_id'
	];

	public function abonnement()
	{
		return $this->belongsTo(\App\Models\Abonnement::class);
	}

	public function oeuvre()
	{
		return $this->belongsTo(\App\Models\Oeuvre::class);
	}

	public function etats()
	{
		return $this->hasMany(\App\Models\Etat::class);
	}
}
