<?php

namespace App\Entity;

use App\Entity\Car\CarDetails;
use App\Entity\Car\Engine;
use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RatingRepository::class)]
class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'ratings')]
    #[ORM\JoinColumn]
    private User $user;

    #[ORM\Column()]
    private int $rating;

    #[ORM\ManyToOne(targetEntity: CarDetails::class, inversedBy: 'ratings', cascade: ['persist'])]
    private ?CarDetails $carDetails = null;

    #[ORM\ManyToOne(targetEntity: Engine::class, inversedBy: 'ratings')]
    private ?Engine $engine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getCarDetails(): ?CarDetails
    {
        return $this->carDetails;
    }

    public function setCarDetails(?CarDetails $carDetails): void
    {
        $this->carDetails = $carDetails;
    }

    public function getEngine(): ?Engine
    {
        return $this->engine;
    }

    public function setEngine(?Engine $engine): void
    {
        $this->engine = $engine;
    }
}
