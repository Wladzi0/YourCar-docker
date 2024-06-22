<?php

namespace App\Entity\Car;

use App\Repository\Car\MakeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Vich\Uploadable
 */
#[ORM\Entity(repositoryClass: MakeRepository::class)]
class Make
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(length: 255, unique: true)]
    private string $name;

    #[ORM\Column(length: 255)]
    private ?string $iconName = null;

    /**
     * @var Collection<int, Model>
     */
    #[ORM\OneToMany(targetEntity: Model::class, mappedBy: 'make')]
    private Collection $models;

    public function __construct(
        /**
         * @Vich\UploadableField(mapping="makes", fileNameProperty="iconName")
         */
        private File $icon,
        #[ORM\Column(length: 30)]
        private string $country
    ) {
        $this->models = new ArrayCollection();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getIconName(): ?string
    {
        return $this->iconName;
    }

    public function setIconName(string $iconName): void
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

    public function getModels(): Collection
    {
        return $this->models;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
}
