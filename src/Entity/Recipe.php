<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 */
class Recipe
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=200)
	 */
	private $name;

	/**
	 * @ORM\Column(type="string", length=900)
	 */
	private $description;

	/**
	 * @ORM\Column(type="datetime")
	 */
	private $created;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $updated;

	public function __construct()
	{
		$this->created = new DateTime("now");
	}

	public function getId () : int
	{
		return $this->id;
	}

	public function getName () : string
	{
		return $this->name;
	}

	public function setName (string $name) : Recipe
	{
		$this->name = $name;
		return $this;
	}

	public function getDescription () : string
	{
		return $this->description;
	}

	public function setDescription (string $description) : Recipe
	{
		$this->description = $description;
		return $this;
	}

	public function getCreated () : DateTime
	{
		return $this->created;
	}

	public function getUpdated ()
	{
		return $this->updated;
	}

	public function setUpdated (DateTime $updated) : Recipe
	{
		$this->updated = $updated;
		return $this;
	}

	public function jsonSerialize()
	{
		return array(
			'id'          => $this->id,
			'name'        => $this->name,
			'description' => $this->description
		);
	}
}
