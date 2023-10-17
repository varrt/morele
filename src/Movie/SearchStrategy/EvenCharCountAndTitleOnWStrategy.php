<?php
declare(strict_types=1);

namespace App\Movie\SearchStrategy;

final readonly class EvenCharCountAndTitleOnWStrategy implements RecommendationSearchStrategyInterface
{
    public function search(array $movieList): array
    {
        return array_values(array_filter($movieList, function (string $title) {
            $stringWithoutSpaces = str_replace(' ', '', $title);
            return strlen($stringWithoutSpaces) % 2 === 0 && $title[0] === 'W';
        }));
    }
}
