<?php
declare(strict_types=1);

namespace App\Tests\Movie\Recommendation;

use PHPUnit\Framework\TestCase;
use App\Movie\Recommendation;
use App\Movie\SearchStrategy\RandomTitleStrategy;
use App\Movie\Repository\MovieRepository;
use PHPUnit\Framework\Attributes\Test;

class RecommendationRandomTitleStrategyTest extends TestCase
{
    private Recommendation $recommendation;
    protected function setUp(): void
    {
        $this->recommendation = new Recommendation(
            new RandomTitleStrategy(),
            new MovieRepository()
        );
        parent::setUp();
    }

    #[Test]
    public function findRandomTitle(): void
    {
        $this->assertCount(3, $this->recommendation->search());
    }
}
