<?php

namespace App\Entity;

use App\Repository\FilterRepository;
use Doctrine\ORM\Mapping as ORM;

//FIXME: I don`t remember place where I used it
#[ORM\Entity(repositoryClass: FilterRepository::class)]
class Filter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $consumption = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $power = null;

    #[ORM\Column(length: 4, nullable: true)]
    private ?string $age = null;

    #[ORM\Column(length: 4, nullable: true)]
    private ?string $tuning = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $transmission = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConsumption(): ?string
    {
        return $this->consumption;
    }

    public function setConsumption(string $consumption): void
    {
        $this->consumption = $consumption;
    }

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(string $power): void
    {
        $this->power = $power;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    public function getTuning(): ?string
    {
        return $this->tuning;
    }

    public function setTuning(string $tuning): void
    {
        $this->tuning = $tuning;
    }

    public function getTransmission(): ?string
    {
        return $this->transmission;
    }

    public function setTransmission(?string $transmission): void
    {
        $this->transmission = $transmission;
    }
}
