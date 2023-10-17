<?php

declare(strict_types=1);

namespace App\Movie\SearchStrategy;

interface RecommendationSearchStrategyInterface
{
    public function search(array $movieList): array;
}
