<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Repositories\UserRepositoryInterface;
use App\Models\User as EloquentUser;
use App\Domain\Entities\User;

class UserRepository implements UserRepositoryInterface
{
  public function find(int $id): ?User
  {
    $user = EloquentUser::find($id);
    if (!$user) {
      return null;
    }

    return new User(
      $user->id,
      $user->name,
      $user->email
    );
  }
}