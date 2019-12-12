<?php

namespace App\Services;
use App\Repositories\CommentaireRepository;

class CommentaireService extends BaseService
{
    function __construct(CommentaireRepository $repository){
		$this->repository=new $repository;
		
	}
}