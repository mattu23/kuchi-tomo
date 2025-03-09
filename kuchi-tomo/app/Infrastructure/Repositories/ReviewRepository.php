<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Repositories\ReviewRepositoryInterface;
use App\Models\Review as EloquentReview;
use App\Domain\Entities\Review;


class ReviewRepository implements ReviewRepositoryInterface
{
  public function find(int $id): ?Review
  {
    $review = EloquentReview::find($id);
    if (!$review) {
      return null;
    }

    return new Review(
      $review->id,
      $review->user,
      $review->shop,
      $review->comment,
      $review->rating
    );
  }
}
