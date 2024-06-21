<?php

namespace App\Entity\Car;

use App\Entity\Fault;
use App\Entity\Image;
use App\Entity\Part;
use App\Enum\CarBodyTypeEnum;
use App\Repository\Car\SubModelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubModelRepository::class)]
class SubModel implements \Stringable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $bodyPlatform;

    #[ORM\ManyToOne(targetEntity: Model::class, inversedBy: 'subModels')]
    #[ORM\JoinColumn]
    private Model $model;

    #[ORM\Column(enumType: CarBodyTypeEnum::class)]
    private CarBodyTypeEnum $bodyType;

    /**
     * @var Collection<int, Image>
     */
    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'subModel', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $images;

    /**
     * @var Collection<int, Rim>
     */
    #[ORM\ManyToMany(targetEntity: Rim::class, mappedBy: 'subModels')]
    private Collection $rims;

    /**
     * @var Collection<int, Engine>
     */
    #[ORM\ManyToMany(targetEntity: Engine::class, mappedBy: 'subModels')]
    #[ORM\JoinColumn]
    private Collection $engines;

    /**
     * @var Collection<int, Fault>
     */
    #[ORM\ManyToMany(targetEntity: Fault::class, mappedBy: 'subModel', cascade: ['persist'])]
    private Collection $faults;

    #[ORM\Column]
    private int $yearStart;

    #[ORM\Column(nullable: true)]
    private ?int $yearFinish = null;

    #[ORM\Column]
    private int $tank;

    #[ORM\Column]
    private float $length;

    #[ORM\Column]
    private float $width;

    /**
     * @var Collection<int, CarDetails>
     */
    #[ORM\OneToMany(targetEntity: CarDetails::class, mappedBy: 'subModel', cascade: ['persist', 'remove'])]
    private Collection $details;

    /**
     * @var Collection<int, Part>
     */
    #[ORM\OneToMany(targetEntity: Part::class, mappedBy: 'car')]
    private Collection $parts;

    public function __construct()
    {
        $this->faults = new ArrayCollection();
        $this->engines = new ArrayCollection();
        $this->rims = new ArrayCollection();
        $this->images = new ArrayCollection();
        $this->details = new ArrayCollection();
        $this->parts = new ArrayCollection();
    }

    public function __toString(): string
    {
        return sprintf('%s (%s)', $this->model->getName(), $this->bodyPlatform);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBodyPlatform(): string
    {
        return $this->bodyPlatform;
    }

    public function setBodyPlatform(string $bodyPlatform): void
    {
        $this->bodyPlatform = $bodyPlatform;
    }

    public function getModel(): Model
    {
        return $this->model;
    }

    public function setModel(Model $model): void
    {
        $this->model = $model;
    }

    public function getBodyType(): CarBodyTypeEnum
    {
        return $this->bodyType;
    }

    public function setBodyType(CarBodyTypeEnum $bodyType): void
    {
        $this->bodyType = $bodyType;
    }

    public function getImages(): Collection
    {
        return $this->images;
    }

    public function getRims(): Collection
    {
        return $this->rims;
    }

    public function getEngines(): Collection
    {
        return $this->engines;
    }

    public function getFaults(): Collection
    {
        return $this->faults;
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

    public function getTank(): int
    {
        return $this->tank;
    }

    public function setTank(int $tank): void
    {
        $this->tank = $tank;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getDetails(): Collection
    {
        return $this->details;
    }

    public function getParts(): Collection
    {
        return $this->parts;
    }
}
