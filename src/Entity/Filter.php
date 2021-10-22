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
     * @ORM\Column(type="array", nullable=true)
     */
    private $consumption = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $power = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $age = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $tuning;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConsumption(): ?array
    {
        return $this->consumption;
    }

    public function setConsumption(?array $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }

    public function getPower(): ?array
    {
        return $this->power;
    }

    public function setPower(?array $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getAge(): ?array
    {
        return $this->age;
    }

    public function setAge(?array $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTuning(): ?array
    {
        return $this->tuning;
    }

    public function setTuning(?array $tuning): self
    {
        $this->tuning = $tuning;

        return $this;
    }



}
