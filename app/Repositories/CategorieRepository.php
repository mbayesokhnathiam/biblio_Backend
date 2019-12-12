<?php

namespace App\Repositories;

use App\Models\Categorie;

class CategorieRepository extends BaseRepository implements BaseRepositoryInterface
{
    function __construct(){
		$this->model=new Categorie();
	}
}