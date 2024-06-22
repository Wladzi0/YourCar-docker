<?php

declare(strict_types=1);

namespace App\DTO;

use App\Entity\Car\Engine;
use App\Entity\Car\SubModel;
use App\Entity\Fault;
use App\Entity\User;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

class FaultDTO
{
    public Collection $images;

    #[Assert\Length(max: 300)]
    #[Assert\NotBlank]
    public ?string $name = null;

    #[Assert\Length(max: 10000)]
    #[Assert\NotBlank]
    public ?string $description = null;

    public function __construct(
        private readonly User $user
    ) {
    }

    public function createEntity(): Fault
    {
        return new Fault($this->user, $this->name, $this->description);
    }

    public function createEntityBySubmodel(SubModel $subModel): Fault
    {
        $fault = $this->createEntity();
        $fault->setSubmodel($subModel);

        return $fault;
    }

    public function createEntityByEngine(Engine $engine): Fault
    {
        $fault = $this->createEntity();
        $fault->setEngine($engine);

        return $fault;
    }
}
