<?php

namespace App\Entity\Car;

use App\Repository\Car\TireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TireRepository::class)]
class Tire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private int $width;

    #[ORM\Column]
    private int $aspectRatio;

    #[ORM\Column(length: 2)]
    private string $diameter;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getAspectRatio(): int
    {
        return $this->aspectRatio;
    }

    public function setAspectRatio(int $aspectRatio): void
    {
        $this->aspectRatio = $aspectRatio;
    }

    public function getDiameter(): string
    {
        return $this->diameter;
    }

    public function setDiameter(string $diameter): void
    {
        $this->diameter = $diameter;
    }
}
