<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Repositories\ShopRepositoryInterface;
use App\Models\Shop as EloquentShop;
use App\Domain\Entities\Shop;

class ShopRepository implements ShopRepositoryInterface
{
  public function find(int $id): ?Shop
  {
    $shop = EloquentShop::find($id);
    if (!$shop) {
      return null;
    }

    return new Shop(
      $shop->id,
      $shop->name,
      $shop->address,
      $shop->phone,
      $shop->website,
      $shop->category,
    );
  }
}
