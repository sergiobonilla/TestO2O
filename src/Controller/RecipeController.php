<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use App\Controller\Core\CoreController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

class RecipeController extends CoreController
{
	/**
	 * @Rest\Get("/list/food/")
	 * @return View
	 */
	public function list () : View
	{
		$list = $this->getRecipeRepository()->findAll();
		$list = $this->serialize($list, 'extended');

		return View::create($list, Response::HTTP_OK);
	}

	/**
	 * @Rest\Get("/search/food/")
	 * @return View
	 */
	public function searchAll() : View
	{
		$list = $this->getRecipeRepository()->findAll();
		$list = $this->serialize($list, 'base');

		return View::create($list, Response::HTTP_OK);
	}

	/**
	 * @Rest\Get("/search/food/{food}")
	 * @param string $food
	 * @return View
	 */
	public function searchFood ($food) : View
	{
		$list = $this->getRecipeRepository()->findFiltered($food);
		$list = $this->serialize($list, 'base');

		return View::create($list, Response::HTTP_OK);
	}
}
