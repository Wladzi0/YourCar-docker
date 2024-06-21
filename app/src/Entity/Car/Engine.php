<?php

namespace App\Entity\Car;

use App\Entity\Comment;
use App\Entity\Fault;
use App\Entity\Image;
use App\Entity\Part;
use App\Entity\Rating;
use App\Repository\Car\EngineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EngineRepository::class)]
class Engine implements \Stringable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Model>
     */
    #[ORM\ManyToMany(targetEntity: Model::class, inversedBy: 'engines')]
    private Collection $models;

    /**
     * @var Collection<int, SubModel>
     */
    #[ORM\ManyToMany(targetEntity: SubModel::class, inversedBy: 'engines')]
    #[ORM\JoinColumn]
    private Collection $subModels;

    /**
     * @var Collection<int, Image>
     */
    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'engine', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $images;

    /**
     * @var Collection<int, Fault>
     */
    #[ORM\ManyToMany(targetEntity: Fault::class, mappedBy: 'engine')]
    private Collection $faults;

    #[ORM\Column(nullable: true)]
    private ?float $weight = null;

    /**
     * @var Collection<int, CarDetails>
     */
    #[ORM\OneToMany(targetEntity: CarDetails::class, mappedBy: 'engine', cascade: ['persist'])]
    private Collection $carDetails;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $powerIncrease = null;

    /**
     * @var Collection<int, Comment>
     */
    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'engine')]
    private Collection $comments;

    /**
     * @var Collection<int, Rating>
     */
    #[ORM\OneToMany(targetEntity: Rating::class, mappedBy: 'engine')]
    private Collection $ratings;

    /**
     * @var Collection<int, Part>
     */
    #[ORM\OneToMany(targetEntity: Part::class, mappedBy: 'engine')]
    private Collection $parts;

    #[ORM\Column(length: 20)]
    private ?string $life = null;

    public function __construct(
        #[ORM\Column(length: 8)]
        private string $capacity,
        #[ORM\Column(length: 20)]
        private string $fuel,
        #[ORM\Column(length: 20)]
        private string $abbreviation,
        #[ORM\Column]
        private float $oil,
        #[ORM\Column]
        private int $cylinders,
    ) {
        $this->subModels = new ArrayCollection();
        $this->models = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->faults = new ArrayCollection();
        $this->carDetails = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->ratings = new ArrayCollection();
        $this->parts = new ArrayCollection();
    }

    public function __toString(): string
    {
        return sprintf('%s %s', $this->capacity, $this->abbreviation);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModels(): Collection
    {
        return $this->models;
    }

    public function getSubModels(): Collection
    {
        return $this->subModels;
    }

    public function getImages(): Collection
    {
        return $this->images;
    }

    public function getCapacity(): string
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getFuel(): string
    {
        return $this->fuel;
    }

    public function setFuel(string $fuel): void
    {
        $this->fuel = $fuel;
    }

    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(string $abbreviation): void
    {
        $this->abbreviation = $abbreviation;
    }

    public function getFaults(): Collection
    {
        return $this->faults;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): void
    {
        $this->weight = $weight;
    }

    public function getCarDetails(): Collection
    {
        return $this->carDetails;
    }

    public function getPowerIncrease(): ?string
    {
        return $this->powerIncrease;
    }

    public function setPowerIncrease(?string $powerIncrease): void
    {
        $this->powerIncrease = $powerIncrease;
    }

    public function getOil(): float
    {
        return $this->oil;
    }

    public function setOil(float $oil): void
    {
        $this->oil = $oil;
    }

    public function getCylinders(): int
    {
        return $this->cylinders;
    }

    public function setCylinders(int $cylinders): void
    {
        $this->cylinders = $cylinders;
    }

    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function getParts(): Collection
    {
        return $this->parts;
    }

    public function getLife(): ?string
    {
        return $this->life;
    }

    public function setLife(string $life): void
    {
        $this->life = $life;
    }
}
