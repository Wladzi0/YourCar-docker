<?php

declare(strict_types=1);

namespace App\DTO;

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
}
