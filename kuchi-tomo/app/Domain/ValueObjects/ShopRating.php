<?php

namespace App\Domain\ValueObjects;

class ShopRating
{
  private float $rating;

  public function __construct(float $rating)
  {
    // 0~5の範囲外の場合は例外を返す
    if ($rating < 0 || $rating > 5) {
      throw new \InvalidArgumentException('Rating must be between 0 and 5');
    }
    $this->rating = $rating;
  }

  public function getRating(): float
  {
    return $this->rating;
  }
}
