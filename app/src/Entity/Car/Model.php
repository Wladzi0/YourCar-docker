<?php

namespace App\Entity\Car;

use App\Repository\Car\ModelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Vich\Uploadable()
 */
#[ORM\Entity(repositoryClass: ModelRepository::class)]
class Model
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Engine>
     */
    #[ORM\ManyToMany(targetEntity: Engine::class, mappedBy: 'models', cascade: ['persist'])]
    private Collection $engines;

    #[ORM\Column(nullable: true)]
    private ?int $yearFinish = null;

    /**
     * @var Collection<int, Transmission>
     */
    #[ORM\ManyToMany(targetEntity: Transmission::class, mappedBy: 'models', cascade: ['persist', 'remove'])]
    private Collection $transmissions;

    #[ORM\Column(nullable: true)]
    private ?string $bodyType = null;

    /**
     * @var Collection<int, SubModel>
     */
    #[ORM\OneToMany(targetEntity: SubModel::class, mappedBy: 'model')]
    private Collection $subModels;

    #[ORM\Column(length: 255)]
    private ?string $iconName = null;

    public function __construct(
        #[ORM\ManyToOne(targetEntity: Make::class, cascade: ['persist'], inversedBy: 'models')]
        #[ORM\JoinColumn]
        private Make $make,
        #[ORM\Column(length: 255)]
        private string $name,
        /**
         * @Vich\UploadableField(
         *     mapping="commom_models",
         *     fileNameProperty="iconName"
         * )
         */
        private File $icon,
        #[ORM\Column]
        private int $yearStart
    ) {
        $this->engines = new ArrayCollection();
        $this->transmissions = new ArrayCollection();
        $this->subModels = new ArrayCollection();
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

    public function getMake(): Make
    {
        return $this->make;
    }

    public function setMake(Make $make): void
    {
        $this->make = $make;
    }

    public function getEngines(): Collection
    {
        return $this->engines;
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

    public function getTransmissions(): Collection
    {
        return $this->transmissions;
    }

    public function getBodyType(): ?string
    {
        return $this->bodyType;
    }

    public function setBodyType(?string $bodyType): void
    {
        $this->bodyType = $bodyType;
    }

    public function getSubModels(): Collection
    {
        return $this->subModels;
    }

    public function getIconName(): ?string
    {
        return $this->iconName;
    }

    public function setIconName(?string $iconName): void
    {
        $this->iconName = $iconName;
    }

    public function getIcon(): File
    {
        return $this->icon;
    }

    public function setIcon(File $icon): void
    {
        $this->icon = $icon;
    }
}
