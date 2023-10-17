<?php
declare(strict_types=1);

namespace App\Tests\Movie\Recommendation;

use PHPUnit\Framework\TestCase;
use App\Movie\Recommendation;
use App\Movie\Repository\MovieRepository;
use App\Movie\SearchStrategy\EvenCharCountAndTitleOnWStrategy;
use PHPUnit\Framework\Attributes\Test;

class EvenCharCountAndTitleOnWStrategyTest extends TestCase
{
    private Recommendation $recommendation;

    protected function setUp(): void
    {
        $this->recommendation = new Recommendation(
            new EvenCharCountAndTitleOnWStrategy(),
            new MovieRepository()
        );
        parent::setUp();
    }

    #[Test]
    public function findAllTitlesWithEvenCharCountAndTitleOnW(): void
    {
        $movies = $this->recommendation->search();

        $this->assertSame([
            "Władca Pierścieni: Powrót króla",
            "Wielki Gatsby",
            "Whiplash",
            "Wielki Gatsby",
        ], $movies);
    }
}
