<?php

namespace App\Services;
use App\Repositories\AbonneRepository;

class AbonneService extends BaseService
{
    function __construct(AbonneRepository $repository){
		$this->repository=new $repository;
		
	}
}