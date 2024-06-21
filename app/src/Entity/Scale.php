<?php

namespace App\Entity;

use App\Entity\Car\CarDetails;
use App\Repository\ScaleRepository;
use Doctrine\ORM\Mapping as ORM;

//FIXME: is it abandoned?
#[ORM\Entity(repositoryClass: ScaleRepository::class)]
class Scale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, cascade: ['persist'], inversedBy: 'scales')]
    #[ORM\JoinColumn]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: CarDetails::class, inversedBy: 'scales')]
    #[ORM\JoinColumn]
    private ?CarDetails $carDetails = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): void
    {
        $this->user = $user;

    }

    public function getCarDetails(): ?CarDetails
    {
        return $this->carDetails;
    }

    public function setCarDetails(?CarDetails $carDetails): void
    {
        $this->carDetails = $carDetails;
    }
}
