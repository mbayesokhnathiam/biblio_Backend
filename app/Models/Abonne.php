<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Dec 2019 20:47:00 +0000.
 */

namespace App\Models;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


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
class Abonne extends BaseModel implements Authenticatable
{
    use Notifiable, HasApiTokens;

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



    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mdp;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->login;
    }
}
