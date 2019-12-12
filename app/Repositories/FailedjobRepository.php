<?php

namespace App\Repositories;

use App\Models\Failedjob;

class FailedjobRepository extends BaseRepository implements BaseRepositoryInterface
{
    function __construct(){
		$this->model=new Failedjob();
	}
}