<?php

namespace App\Repositories;

use App\Models\Commentaire;

class CommentaireRepository extends BaseRepository implements BaseRepositoryInterface
{
    function __construct(){
		$this->model=new Commentaire();
	}
}