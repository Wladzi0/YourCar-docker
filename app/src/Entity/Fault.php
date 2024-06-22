<?php

namespace App\Entity;

use App\Entity\Car\Engine;
use App\Entity\Car\SubModel;
use App\Repository\FaultRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FaultRepository::class)]
class Fault
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Engine>
     */
    #[ORM\ManyToMany(targetEntity: Engine::class, inversedBy: 'faults')]
    private Collection $engine;

    /**
     * @var Collection<int, SubModel>
     */
    #[ORM\ManyToMany(targetEntity: SubModel::class, inversedBy: 'faults')]
    private Collection $subModel;

    /**
     * @var Collection<int, Image>
     */
    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'fault', cascade: ['persist'], orphanRemoval: true)]
    private Collection $images;

    /**F
     * @var Collection<int, Comment>
     */
    /**
     * @var Collection<int, Comment>
     */
    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'fault', cascade: ['persist', 'remove'])]
    private Collection $comments;

    #[ORM\Column]
    private bool $published = false;

    public function __construct(
        #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'faults')]
        #[ORM\JoinColumn]
        private User $user,
        #[ORM\Column(length: 300)]
        private string $name,
        #[ORM\Column(length: 10000)]
        private string $description,
    ) {
        $this->engine = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->subModel = new ArrayCollection();
        $this->comments = new ArrayCollection();
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

    public function getImages(): Collection
    {
        return $this->images;
    }

    public function getEngine(): Collection
    {
        return $this->engine;
    }

    public function getSubModel(): Collection
    {
        return $this->subModel;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function isPublished(): bool
    {
        return $this->published;
    }

    public function setPublished(bool $published): void
    {
        $this->published = $published;
    }
}
