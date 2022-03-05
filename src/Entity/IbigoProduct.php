<?php

namespace App\Entity;

use App\Repository\IbigoProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IbigoProductRepository::class)]
class IbigoProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $name;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'integer')]
    private $price;

    #[ORM\Column(type: 'float')]
    private $widthScreen;

    #[ORM\Column(type: 'float')]
    private $heightScreen;

    #[ORM\Column(type: 'string', length: 255)]
    private $reference;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getWidthScreen(): ?float
    {
        return $this->widthScreen;
    }

    public function setWidthScreen(float $widthScreen): self
    {
        $this->widthScreen = $widthScreen;

        return $this;
    }

    public function getHeightScreen(): ?float
    {
        return $this->heightScreen;
    }

    public function setHeightScreen(float $heightScreen): self
    {
        $this->heightScreen = $heightScreen;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}
