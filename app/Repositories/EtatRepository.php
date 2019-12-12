<?php

namespace App\Repositories;

use App\Models\Etat;

class EtatRepository extends BaseRepository implements BaseRepositoryInterface
{
    function __construct(){
		$this->model=new Etat();
	}
}