<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
#[ApiResource]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $gameId = null;

    #[ORM\Column(nullable: true)]
    private ?float $gameRating = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $gameReview = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGameId(): ?int
    {
        return $this->gameId;
    }

    public function setGameId(int $gameId): static
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getGameRating(): ?float
    {
        return $this->gameRating;
    }

    public function setGameRating(?float $gameRating): static
    {
        $this->gameRating = $gameRating;

        return $this;
    }

    public function getGameReview(): ?string
    {
        return $this->gameReview;
    }

    public function setGameReview(string $gameReview): static
    {
        $this->gameReview = $gameReview;

        return $this;
    }
}
