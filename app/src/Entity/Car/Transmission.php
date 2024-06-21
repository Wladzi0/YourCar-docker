<?php

namespace App\Entity\Car;

use App\Repository\Car\TransmissionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransmissionRepository::class)]
class Transmission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $name;

    /**
     * @var Collection<int, Model>
     */
    #[ORM\ManyToMany(targetEntity: Model::class, inversedBy: 'transmissions')]
    private Collection $models;

    /**
     * @var Collection<int, CarDetails>
     */
    #[ORM\OneToMany(targetEntity: CarDetails::class, mappedBy: 'transmission')]
    private Collection $carDetails;

    public function __construct()
    {
        $this->models = new ArrayCollection();
        $this->carDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getModels(): Collection
    {
        return $this->models;
    }

    public function getCarDetails(): Collection
    {
        return $this->carDetails;
    }
}
