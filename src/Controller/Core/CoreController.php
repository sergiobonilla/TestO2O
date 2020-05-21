<?php

namespace App\Controller\Core;

use App\Entity\Recipe;
use App\Repository\RecipeRepository;
use Doctrine\Common\Annotations\AnnotationReader;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CoreController extends AbstractFOSRestController
{
	protected function getRecipeRepository (): RecipeRepository
	{
		return $this->getDoctrine()->getRepository(Recipe::class);
	}

	protected function serialize ($data, $group) : array
	{
		$cm         = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
		$normalizer = new ObjectNormalizer($cm);
		$serializer = new Serializer(array($normalizer));

		try {
			return $serializer->normalize($data, null, array('groups' => $group));
		} catch (ExceptionInterface $e) {
			return array();
		}
	}
}
