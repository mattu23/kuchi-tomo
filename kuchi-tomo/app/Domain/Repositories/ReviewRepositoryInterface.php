<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Review;

interface ReviewRepositoryInterface
{
    public function find(int $id): ?Review;
}
