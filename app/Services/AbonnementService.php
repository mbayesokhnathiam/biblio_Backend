<?php

namespace App\Services;
use App\Repositories\AbonnementRepository;

class AbonnementService extends BaseService
{
    function __construct(AbonnementRepository $repository){
		$this->repository=new $repository;
		
	}
}