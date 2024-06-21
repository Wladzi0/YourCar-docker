<?php

namespace App\Entity;

use App\Entity\Car\Engine;
use App\Entity\Car\SubModel;
use App\Repository\PartRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Vich\Uploadable
 */
#[ORM\Entity(repositoryClass: PartRepository::class)]
class Part
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $catalogNumber;

    #[ORM\Column(length: 255)]
    private string $name;

    #[ORM\ManyToOne(targetEntity: SubModel::class, inversedBy: 'parts')]
    private ?SubModel $car = null;

    #[ORM\ManyToOne(targetEntity: Engine::class, inversedBy: 'parts')]
    private ?Engine $engine = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    /**
     * @Vich\UploadableField(mapping="parts", fileNameProperty="imageName")
     */
    private File $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatalogNumber(): string
    {
        return $this->catalogNumber;
    }

    public function setCatalogNumber(string $catalogNumber): void
    {
        $this->catalogNumber = $catalogNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCar(): ?SubModel
    {
        return $this->car;
    }

    public function setCar(?SubModel $car): void
    {
        $this->car = $car;
    }

    public function getEngine(): ?Engine
    {
        return $this->engine;
    }

    public function setEngine(?Engine $engine): void
    {
        $this->engine = $engine;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImage(): File
    {
        return $this->image;
    }

    public function setImage(File $image): void
    {
        $this->image = $image;
    }
}
