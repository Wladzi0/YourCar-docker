<?php

namespace App\Entity;

use App\Entity\Car\Engine;
use App\Entity\Car\Rim;
use App\Entity\Car\SubModel;
use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Vich\Uploadable()
 */
#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    /**
     * @Vich\UploadableField(mapping="car_details", fileNameProperty="imageName")
     */
    private File $image;

    #[ORM\ManyToOne(targetEntity: Engine::class, cascade: ['persist', 'remove'], inversedBy: 'images')]
    private ?Engine $engine = null;

    #[ORM\ManyToOne(targetEntity: Rim::class, cascade: ['persist', 'remove'], inversedBy: 'images')]
    private ?Rim $rim = null;

    #[ORM\ManyToOne(targetEntity: Fault::class, cascade: ['persist'], inversedBy: 'images')]
    #[ORM\JoinColumn(onDelete: 'CASCADE')]
    private ?Fault $fault = null;

    #[ORM\ManyToOne(targetEntity: SubModel::class, cascade: ['persist', 'remove'], inversedBy: 'images')]
    private ?SubModel $subModel = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEngine(): ?Engine
    {
        return $this->engine;
    }

    public function setEngine(?Engine $engine): void
    {
        $this->engine = $engine;
    }

    public function getFault(): ?Fault
    {
        return $this->fault;
    }

    public function setFault(?Fault $fault): void
    {
        $this->fault = $fault;
    }

    public function getRim(): ?Rim
    {
        return $this->rim;
    }

    public function setRim(?Rim $rim): void
    {
        $this->rim = $rim;
    }

    public function getSubModel(): ?SubModel
    {
        return $this->subModel;
    }

    public function setSubModel(?SubModel $subModel): void
    {
        $this->subModel = $subModel;
    }
}
