<?php

namespace App\Entity;

use App\Repository\FilterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FilterRepository::class)
 */
class Filter
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10,nullable=true)
     */
    private $consumption;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $power ;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $tuning;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $transmission;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConsumption(): ?string
    {
        return $this->consumption;
    }

    public function setConsumption(string $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(string $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function setAge(string $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTuning(): ?string
    {
        return $this->tuning;
    }

    public function setTuning(string $tuning): self
    {
        $this->tuning = $tuning;

        return $this;
    }

    public function getTransmission(): ?string
    {
        return $this->transmission;
    }

    public function setTransmission(?string $transmission): self
    {
        $this->transmission = $transmission;

        return $this;
    }



}
