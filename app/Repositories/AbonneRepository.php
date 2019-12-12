<?php

namespace App\Repositories;

use App\Models\Abonne;

class AbonneRepository extends BaseRepository implements BaseRepositoryInterface
{
    function __construct(){
		$this->model=new Abonne();
	}
}