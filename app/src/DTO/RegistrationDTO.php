<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class RegistrationDTO extends ChangePassword
{
    #[Assert\NotBlank]
    public ?string $firstName = null;

    #[Assert\NotBlank]
    public ?string $lastName = null;

    #[Assert\Email]
    public ?string $email = null;

    #[Assert\Language]
    public string $preferredLanguage;
}
