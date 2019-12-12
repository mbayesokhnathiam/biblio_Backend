<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Abonne
 * 
 * @property int $id
 * @property string $numAbonne
 * @property string $cin
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 * @property string $email
 * @property string $tel
 * @property string $login
 * @property string $mdp
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $abonnements
 * @property \Illuminate\Database\Eloquent\Collection $commentaires
 * @property \Illuminate\Database\Eloquent\Collection $notes
 *
 * @package App\Models
 */
class Abonne extends Eloquent
{
	protected $table = 'abonne';

	protected $fillable = [
		'numAbonne',
		'cin',
		'nom',
		'prenom',
		'adresse',
		'email',
		'tel',
		'login',
		'mdp'
	];

	public function abonnements()
	{
		return $this->hasMany(\App\Models\Abonnement::class);
	}

	public function commentaires()
	{
		return $this->hasMany(\App\Models\Commentaire::class);
	}

	public function notes()
	{
		return $this->hasMany(\App\Models\Note::class);
	}
}
