<?php

namespace App\Entity\Car;

use App\Entity\Favourite;
use App\Entity\Rating;
use App\Entity\Scale;
use App\Entity\User;
use App\Repository\Car\CarDetailsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarDetailsRepository::class)]
class CarDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $speed = null;

    #[ORM\Column(nullable: true)]
    private ?float $weight = null;

    #[ORM\Column(nullable: true)]
    private ?float $fuelConsumptionMixed = null;

    #[ORM\Column(nullable: true)]
    private ?float $fuelConsumptionExtra = null;

    #[ORM\ManyToOne(targetEntity: SubModel::class, cascade: ['persist', 'remove'], inversedBy: 'details')]
    #[ORM\JoinColumn]
    private ?SubModel $subModel = null;

    #[ORM\Column(nullable: true)]
    private ?int $yearFinish = null;

    #[ORM\ManyToOne(targetEntity: Engine::class, cascade: ['persist'], inversedBy: 'carDetails')]
    #[ORM\JoinColumn]
    private ?Engine $engine = null;

    /**
     * @var Collection<int, Favourite>
     */
    #[ORM\OneToMany(targetEntity: Favourite::class, mappedBy: 'carDetails', cascade: ['persist', 'remove'])]
    private Collection $favourites;

    /**
     * @var Collection<int, Scale>
     */
    #[ORM\OneToMany(targetEntity: Scale::class, mappedBy: 'carDetails', cascade: ['persist', 'remove'])]
    private Collection $scales;

    /**
     * @var Collection<int, Rating>
     */
    #[ORM\OneToMany(targetEntity: Rating::class, mappedBy: 'carDetails', cascade: ['persist', 'remove'])]
    private Collection $ratings;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $tuning = null;

    #[ORM\Column(length: 20)]
    private ?string $engineLife = null;

    public function __construct(
        #[ORM\Column]
        private float $fuelConsumption,
        #[ORM\Column]
        private float $power,
        #[ORM\Column]
        private int $torque,
        #[ORM\Column(length: 20)]
        private string $eco,
        #[ORM\Column]
        private int $yearStart,
        #[ORM\ManyToOne(targetEntity: Transmission::class, inversedBy: 'car_details')]
        #[ORM\JoinColumn]
        private Transmission $transmission,
        #[ORM\Column(length: 100)]
        private string $purpose,
        #[ORM\Column(length: 20)]
        private string $size,
    ) {
        $this->favourites = new ArrayCollection();
        $this->scales = new ArrayCollection();
        $this->ratings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    public function setFuelConsumption(float $fuelConsumption): void
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    public function getPower(): float
    {
        return $this->power;
    }

    public function setPower(float $power): void
    {
        $this->power = $power;

    }

    public function getEco(): string
    {
        return $this->eco;
    }

    public function setEco(string $eco): void
    {
        $this->eco = $eco;
    }

    public function getFuelConsumptionMixed(): ?float
    {
        return $this->fuelConsumptionMixed;
    }

    public function setFuelConsumptionMixed(float $fuelConsumptionMixed): void
    {
        $this->fuelConsumptionMixed = $fuelConsumptionMixed;
    }

    public function getFuelConsumptionExtra(): ?float
    {
        return $this->fuelConsumptionExtra;
    }

    public function setFuelConsumptionExtra(float $fuelConsumptionExtra): void
    {
        $this->fuelConsumptionExtra = $fuelConsumptionExtra;
    }

    public function getSubModel(): ?SubModel
    {
        return $this->subModel;
    }

    public function setSubModel(?SubModel $subModel): void
    {
        $this->subModel = $subModel;
    }

    public function getYearStart(): int
    {
        return $this->yearStart;
    }

    public function setYearStart(int $yearStart): void
    {
        $this->yearStart = $yearStart;
    }

    public function getYearFinish(): ?int
    {
        return $this->yearFinish;
    }

    public function setYearFinish(?int $yearFinish): void
    {
        $this->yearFinish = $yearFinish;
    }

    public function getEngine(): ?Engine
    {
        return $this->engine;
    }

    public function setEngine(?Engine $engine): void
    {
        $this->engine = $engine;
    }

    public function getTransmission(): Transmission
    {
        return $this->transmission;
    }

    public function setTransmission(Transmission $transmission): void
    {
        $this->transmission = $transmission;
    }

    public function getTorque(): int
    {
        return $this->torque;
    }

    public function setTorque(int $torque): void
    {
        $this->torque = $torque;
    }

    public function getFavourites(): Collection
    {
        return $this->favourites;
    }

    public function isFavouredByUser(User $user): bool
    {
        foreach ($this->favourites as $favourite) {
            if ($favourite->getUser() == $user) {
                return true;
            }
        }

        return false;
    }

    public function isScaledByUser(User $user): bool
    {
        foreach ($this->scales as $scale) {
            if ($scale->getUser() == $user) {
                return true;
            }
        }

        return false;
    }

    public function getScales(): Collection
    {
        return $this->scales;
    }

    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function getTuning(): ?string
    {
        return $this->tuning;
    }

    public function setTuning(?string $tuning): void
    {
        $this->tuning = $tuning;
    }

    public function getAge(): int
    {
        $date = new \DateTime();
        $age = $date->format('Y');

        return (int) $age - $this->getYearStart();
    }

    public function getPurpose(): string
    {
        return $this->purpose;
    }

    public function setPurpose(string $purpose): void
    {
        $this->purpose = $purpose;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function getEngineLife(): ?string
    {
        return $this->engineLife;
    }

    public function setEngineLife(string $engineLife): void
    {
        $this->engineLife = $engineLife;
    }
}