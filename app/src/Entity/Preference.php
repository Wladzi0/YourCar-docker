<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreferenceRepository::class)]
class Preference
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preferLanguage = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $carType = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $tuning = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $fuelConsumption = null;

    #[ORM\OneToOne(targetEntity: User::class, inversedBy: 'preference', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private User $user;

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getPreferLanguage(): ?string
    {
        return $this->preferLanguage;
    }

    public function setPreferLanguage(?string $preferLanguage): void
    {

        $this->preferLanguage = $preferLanguage ?? 'en';
    }

    public function getCarType(): ?string
    {
        return $this->carType;
    }

    public function setCarType(?string $carType): void
    {
        $this->carType = $carType;
    }

    public function getTuning(): ?string
    {
        return $this->tuning;
    }

    public function setTuning(?string $tuning): void
    {
        $this->tuning = $tuning;
    }

    public function getFuelConsumption(): ?string
    {
        return $this->fuelConsumption;
    }

    public function setFuelConsumption(?string $fuelConsumption): void
    {
        $this->fuelConsumption = $fuelConsumption;
    }
}
