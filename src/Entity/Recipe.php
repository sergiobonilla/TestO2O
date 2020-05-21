<?php

namespace App\Entity;

use DateTime;
use JsonSerializable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 */
class Recipe implements JsonSerializable
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
	 * @ORM\Column(type="string", length=300, nullable=true)
	 */
	private $image;

	/**
	 * @ORM\Column(type="string", length=300, nullable=true)
	 */
	private $tagLine;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $firstBrewed;

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

	public function getImage () : string
	{
		return $this->image;
	}

	public function setImage (string $image) : Recipe
	{
		$this->image = $image;
		return $this;
	}

	public function getTagLine () : string
	{
		return $this->tagLine;
	}

	public function setTagLine (string $tagLine) : Recipe
	{
		$this->tagLine = $tagLine;
		return $this;
	}

	public function getFirstBrewed ()
	{
		return $this->firstBrewed;
	}

	public function setFirstBrewed (DateTime $firstBrewed) : Recipe
	{
		$this->firstBrewed = $firstBrewed;
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
