<?php

namespace App\Movie;

use App\Movie\SearchStrategy\RecommendationSearchStrategyInterface;
use App\Movie\Repository\MovieRepository;

final readonly class Recommendation
{
    public function __construct(
        private RecommendationSearchStrategyInterface $searchStrategy,
        private MovieRepository $movieRepository
    ) {}

    public function search(): array
    {
        return $this->searchStrategy->search($this->movieRepository->findAll());
    }
}
