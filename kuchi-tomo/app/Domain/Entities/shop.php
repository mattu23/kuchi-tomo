<?php

namespace App\Domain\Entities;

use App\Domain\Enums\ShopCategoryEnum;

class Shop
{
    private int $id;
    private string $name;
    private string $address;
    private string $phone;
    private string $website;
    private ShopCategoryEnum $category;

    public function __construct(int $id, string $name, string $address, string $phone, string $website, ShopCategoryEnum $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->website = $website;
        $this->category = $category;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function getCategory(): ShopCategoryEnum
    {
        return $this->category;
    }
}
