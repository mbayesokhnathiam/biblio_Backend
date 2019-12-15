<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Abonnement
 *
 * @property int $id
 * @property string $numero
 * @property \Carbon\Carbon $DateAbonnement
 * @property \Carbon\Carbon $DateFinAbonnementPrevu
 * @property \Carbon\Carbon $DateReelleFinAbonnement
 * @property bool $etat
 * @property int $abonne_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Abonne $abonne
 * @property \Illuminate\Database\Eloquent\Collection $exemplaires
 *
 * @package App\Models
 */
class Abonnement extends BaseModel
{
	protected $table = 'abonnement';

	protected $casts = [
		'etat' => 'bool',
		'abonne_id' => 'int'
	];

	protected $dates = [
		'DateAbonnement',
		'DateFinAbonnementPrevu',
		'DateReelleFinAbonnement'
	];

	protected $fillable = [
		'numero',
		'DateAbonnement',
		'DateFinAbonnementPrevu',
		'DateReelleFinAbonnement',
		'etat',
		'abonne_id'
	];

	public function abonne()
	{
		return $this->belongsTo(\App\Models\Abonne::class);
	}

	public function exemplaires()
	{
		return $this->hasMany(\App\Models\Exemplaire::class);
	}
}
