<?php

declare(strict_types=1);

namespace App\Movie\SearchStrategy;

final readonly class RandomTitleStrategy implements RecommendationSearchStrategyInterface
{
    public function search(array $movieList): array
    {
        $randomElements = array_rand($movieList, 3);

        if (!is_array($randomElements)) {
            $randomElements = [$randomElements];
        }

        return array_map(function($index) use ($movieList) {
            return $movieList[$index];
        }, $randomElements);
    }
}
