<?php

namespace App\Repository;

use Exception;
use Doctrine\ORM\EntityRepository;

class RecipeRepository extends EntityRepository
{
	public function findFiltered ($filter) {
		try {
			return $this->createQueryBuilder('r')
				->where('r.name LIKE :filter')
				->orWhere('r.description LIKE :filter')
				->setParameter('filter', '%' . $filter . '%')
				->orderBy('r.created', 'DESC')
				->getQuery()
				->getResult();
		} catch (Exception $e) {
			return array();
		}
	}
}
