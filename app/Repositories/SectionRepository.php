<?php

namespace App\Repositories;

use App\Models\Section;

class SectionRepository extends BaseRepository implements BaseRepositoryInterface
{
    function __construct(){
		$this->model=new Section();
	}
}