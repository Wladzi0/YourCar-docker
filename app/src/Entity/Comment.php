<?php

namespace App\Entity;

use App\Entity\Car\Engine;
use App\Repository\CommentRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Fault::class, inversedBy: 'comments')]
    private ?Fault $fault = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'comments')]
    #[ORM\JoinColumn]
    private User $user;

    #[ORM\Column(length: 10000)]
    private ?string $content = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    /**
     * @var Collection<int, Favourite>
     */
    #[ORM\OneToMany(targetEntity: Favourite::class, mappedBy: 'comment')]
    private Collection $favourites;

    #[ORM\ManyToOne(targetEntity: Engine::class, inversedBy: 'comments')]
    private ?Engine $engine = null;

    public function __construct()
    {
        $this->setCreatedAt(new \DateTime('now'));
        $this->favourites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFault(): ?Fault
    {
        return $this->fault;
    }

    public function setFault(?Fault $fault): void
    {
        $this->fault = $fault;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getFavourites(): Collection
    {
        return $this->favourites;
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
