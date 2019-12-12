<?php

namespace App\Services;
use App\Repositories\ArmoireRepository;

class ArmoireService extends BaseService
{
    function __construct(ArmoireRepository $repository){
		$this->repository=new $repository;
		
	}
}