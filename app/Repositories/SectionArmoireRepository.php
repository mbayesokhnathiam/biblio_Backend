<?php

namespace App\Repositories;

use App\Models\SectionArmoire;

class SectionArmoireRepository extends BaseRepository implements BaseRepositoryInterface
{
    function __construct(){
		$this->model=new SectionArmoire();
	}
}