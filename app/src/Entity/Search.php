<?php

namespace App\Entity;

use App\Repository\SearchRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SearchRepository::class)
 */
class Search
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $purpose;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $fuelConsumption;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $engineLife;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $body;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $roominess;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(?string $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function getFuelConsumption(): ?string
    {
        return $this->fuelConsumption;
    }

    public function setFuelConsumption(?string $fuelConsumption): self
    {
        $this->fuelConsumption = $fuelConsumption;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getEngineLife(): ?string
    {
        return $this->engineLife;
    }

    public function setEngineLife(?string $engineLife): self
    {
        $this->engineLife = $engineLife;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getRoominess(): ?string
    {
        return $this->roominess;
    }

    public function setRoominess(?string $roominess): self
    {
        $this->roominess = $roominess;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
