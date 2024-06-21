<?php

declare(strict_types=1);

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class ResetPasswordDTO
{
    //FIXME: also check if exits in DB
    #[Assert\Email]
    #[Assert\NotBlank]
    public ?string $email = null;
}
