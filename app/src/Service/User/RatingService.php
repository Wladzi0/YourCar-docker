<?php

namespace App\Service\User;

use App\DTO\RatingDTO;
use App\Entity\Car\Engine;
use App\Entity\Rating;

class RatingService
{
    public function getEngineRating(Engine $engine): RatingDTO
    {
        $dto = new RatingDTO(count($engine->getRatings()));
        if (count($engine->getRatings()) > 0) {
            $sum = array_sum(array_map(static fn (Rating $rating): int => $rating->getRating(), $engine->getRatings()->toArray()));

            $dto->averageRating = $sum / count($engine->getRatings());
        } else {
            $dto->averageRating = 0;
        }

        return $dto;
    }
}
