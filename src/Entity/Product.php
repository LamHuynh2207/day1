<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ProductName;

    /**
     * @ORM\Column(type="float")
     */
    private $Price;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $ImgUrl;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $Id): self
    {
        $this->id = $Id; 
        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): self
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->ImgUrl;
    }

    public function setImgUrl(?string $ImgUrl): self
    {
        $this->ImgUrl = $ImgUrl;

        return $this;
    }
}
