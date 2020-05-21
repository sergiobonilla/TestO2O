<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 */
class Recipe
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 * @Groups({"base", "extended"})
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=200)
	 * @Groups({"base", "extended"})
	 */
	private $name;

	/**
	 * @ORM\Column(type="string", length=900)
	 * @Groups({"base", "extended"})
	 */
	private $description;

	/**
	 * @ORM\Column(type="string", length=300, nullable=true)
	 * @Groups({"extended"})
	 */
	private $image;

	/**
	 * @ORM\Column(type="string", length=300, nullable=true)
	 * @Groups({"extended"})
	 */
	private $tagLine;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @Groups({"extended"})
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
}
