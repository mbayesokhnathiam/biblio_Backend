<?php

namespace App\Services;
use App\Repositories\EtatRepository;

class EtatService extends BaseService
{
    function __construct(EtatRepository $repository){
		$this->repository=new $repository;
		
	}
}