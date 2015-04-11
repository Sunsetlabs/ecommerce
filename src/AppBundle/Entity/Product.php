<?php 
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product 
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	/**
     * @ORM\Column(type="string", length=100)
     */
	protected $name;
	/**
     * @ORM\Column(type="integer")
     */
	protected $price;
	/**
     * @ORM\Column(type="integer")
     */
	protected $stock;

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getStock()
	{
		return $this->stock;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}

	public function setStock($stock)
	{
		$this->stock = $stock;
		return $this;
	}

}