<?php

declare(strict_types=1);

namespace App\Movie\SearchStrategy;

final readonly class MultiWordTitleStrategy implements RecommendationSearchStrategyInterface
{
    public function search(array $movieList): array
    {
        return array_values(array_filter($movieList, fn ($title) => count(explode(" ", $title)) > 1));
    }
}
