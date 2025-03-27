<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Shop;

interface ShopRepositoryInterface
{
    public function find(int $id): ?Shop;
}
