<?php

namespace App\Entity;

use App\Repository\SearchRepository;
use Doctrine\ORM\Mapping as ORM;

//FIXME: is it abandoned?
#[ORM\Entity(repositoryClass: SearchRepository::class)]
class Search
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $purpose = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $fuelConsumption = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $size = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $engineLife = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $body = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $roominess = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $country = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(?string $purpose): void
    {
        $this->purpose = $purpose;
    }

    public function getFuelConsumption(): ?string
    {
        return $this->fuelConsumption;
    }

    public function setFuelConsumption(?string $fuelConsumption): void
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): void
    {
        $this->size = $size;
    }

    public function getEngineLife(): ?string
    {
        return $this->engineLife;
    }

    public function setEngineLife(?string $engineLife): void
    {
        $this->engineLife = $engineLife;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): void
    {
        $this->body = $body;
    }

    public function getRoominess(): ?string
    {
        return $this->roominess;
    }

    public function setRoominess(?string $roominess): void
    {
        $this->roominess = $roominess;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
}
