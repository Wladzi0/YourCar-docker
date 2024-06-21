<?php

declare(strict_types=1);

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class CommentDTO
{
    #[Assert\Length(max: 1000)]
    #[Assert\NotBlank]
    public ?string $content = null;
}
