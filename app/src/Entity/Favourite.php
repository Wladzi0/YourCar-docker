<?php

namespace App\Entity;

use App\Entity\Car\CarDetails;
use App\Repository\FavouriteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavouriteRepository::class)]
class Favourite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: CarDetails::class, cascade: ['persist'], inversedBy: 'favourites')]
    private ?CarDetails $carDetails = null;

    #[ORM\ManyToOne(targetEntity: Comment::class, inversedBy: 'favourites')]
    private ?Comment $comment = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'favourites')]
    private User $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarDetails(): ?CarDetails
    {
        return $this->carDetails;
    }

    public function setCarDetails(?CarDetails $carDetails): void
    {
        $this->carDetails = $carDetails;
    }

    public function getComment(): ?Comment
    {
        return $this->comment;
    }

    public function setComment(?Comment $comment): void
    {
        $this->comment = $comment;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}
