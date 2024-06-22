<?php

namespace App\DTO;

class RatingDTO
{
    public float $averageRating;

    public function __construct(
        public int $ratingCount
    ) {
    }
}
