<?php

namespace App\Services;
use App\Repositories\SectionArmoireRepository;

class SectionArmoireService extends BaseService
{
    function __construct(SectionArmoireRepository $repository){
		$this->repository=new $repository;
		
	}
}