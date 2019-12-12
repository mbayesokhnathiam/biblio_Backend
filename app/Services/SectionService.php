<?php

namespace App\Services;
use App\Repositories\SectionRepository;

class SectionService extends BaseService
{
    function __construct(SectionRepository $repository){
		$this->repository=new $repository;
		
	}
}