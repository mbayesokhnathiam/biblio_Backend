<?php

namespace App\Services;
use App\Repositories\OeuvreRepository;

class OeuvreService extends BaseService
{
    function __construct(OeuvreRepository $repository){
		$this->repository=new $repository;
		
	}
}