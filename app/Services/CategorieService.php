<?php

namespace App\Services;
use App\Repositories\CategorieRepository;

class CategorieService extends BaseService
{
    function __construct(CategorieRepository $repository){
		$this->repository=new $repository;
		
	}
}