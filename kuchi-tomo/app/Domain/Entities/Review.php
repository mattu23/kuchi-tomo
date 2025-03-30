<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\ShopRating;

class Review
{
    private int $id;
    private User $user;
    private Shop $shop;
    private string $comment;
    private ShopRating $rating;

    public function __construct(int $id, User $user, Shop $shop, string $comment, ShopRating $rating)
    {
        $this->id = $id;
        $this->user = $user;
        $this->shop = $shop;
        $this->comment = $comment;
        $this->rating = $rating;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getShop(): Shop
    {
        return $this->shop;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getRating(): ShopRating
    {
        return $this->rating;
    }
}

