<?php

namespace App\Services;
use App\Repositories\ExemplaireRepository;

class ExemplaireService extends BaseService
{
    function __construct(ExemplaireRepository $repository){
		$this->repository=new $repository;
		
	}
}