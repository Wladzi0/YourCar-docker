<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class ChangePassword
{
    #[Assert\PasswordStrength]
    #[Assert\Length(min: 8)]
    public ?string $password = null;
}
