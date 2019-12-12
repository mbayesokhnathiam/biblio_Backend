<?php

namespace App\Repositories;

use App\Models\Oeuvre;

class OeuvreRepository extends BaseRepository implements BaseRepositoryInterface
{
    function __construct(){
		$this->model=new Oeuvre();
	}
}