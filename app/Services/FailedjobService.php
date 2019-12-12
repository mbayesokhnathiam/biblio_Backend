<?php

namespace App\Services;
use App\Repositories\FailedjobRepository;

class FailedjobService extends BaseService
{
    function __construct(FailedjobRepository $repository){
		$this->repository=new $repository;
		
	}
}