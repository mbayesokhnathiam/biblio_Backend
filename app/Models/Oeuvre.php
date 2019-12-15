<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Oeuvre
 *
 * @property int $id
 * @property string $numeroISBN
 * @property string $titre
 * @property string $auteur
 * @property string $edition
 * @property \Carbon\Carbon $DateParution
 * @property string $Resume
 * @property int $QteTotale
 * @property int $QteDispo
 * @property string $image
 * @property int $categorie_id
 * @property int $section_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Categorie $categorie
 * @property \App\Models\Section $section
 * @property \Illuminate\Database\Eloquent\Collection $commentaires
 * @property \Illuminate\Database\Eloquent\Collection $exemplaires
 * @property \Illuminate\Database\Eloquent\Collection $notes
 *
 * @package App\Models
 */
class Oeuvre extends BaseModel
{
	protected $table = 'oeuvre';

	protected $casts = [
		'QteTotale' => 'int',
		'QteDispo' => 'int',
		'categorie_id' => 'int',
		'section_id' => 'int'
	];

	protected $dates = [
		'DateParution'
	];

	protected $fillable = [
		'numeroISBN',
		'titre',
		'auteur',
		'edition',
		'DateParution',
		'Resume',
		'QteTotale',
		'QteDispo',
		'image',
		'categorie_id',
		'section_id'
	];

	public function categorie()
	{
		return $this->belongsTo(\App\Models\Categorie::class);
	}

	public function section()
	{
		return $this->belongsTo(\App\Models\Section::class);
	}

	public function commentaires()
	{
		return $this->hasMany(\App\Models\Commentaire::class);
	}

	public function exemplaires()
	{
		return $this->hasMany(\App\Models\Exemplaire::class);
	}

	public function notes()
	{
		return $this->hasMany(\App\Models\Note::class);
	}
}
