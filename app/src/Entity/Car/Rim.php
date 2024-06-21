<?php

namespace App\Entity\Car;

use App\Entity\Image;
use App\Repository\Car\RimRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RimRepository::class)]
class Rim implements \Stringable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $size;

    #[ORM\Column(length: 6)]
    private string $weight;

    #[ORM\Column(length: 6)]
    private string $departure;

    /**
     * @var Collection<int, Image>
     */
    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'rim', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $images;

    #[ORM\Column(length: 20)]
    private string $pcd;

    #[ORM\Column(length: 2)]
    private string $stud;

    /**
     * @var Collection<int, SubModel>
     */
    #[ORM\ManyToMany(targetEntity: SubModel::class, inversedBy: 'rims')]
    private Collection $subModels;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->subModels = new ArrayCollection();
    }

    public function __toString(): string
    {
        return sprintf('r%s %sx%s %s', $this->size, $this->stud, $this->pcd, $this->departure);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function getWeight(): string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    public function getDeparture(): string
    {
        return $this->departure;
    }

    public function setDeparture(string $departure): void
    {
        $this->departure = $departure;
    }

    public function getImages(): Collection
    {
        return $this->images;
    }

    public function getPcd(): string
    {
        return $this->pcd;
    }

    public function setPcd(string $pcd): void
    {
        $this->pcd = $pcd;
    }

    public function getStud(): string
    {
        return $this->stud;
    }

    public function setStud(string $stud): void
    {
        $this->stud = $stud;
    }

    public function getSubModels(): Collection
    {
        return $this->subModels;
    }
}
