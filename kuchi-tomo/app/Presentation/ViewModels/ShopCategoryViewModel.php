<?php

namespace App\Presentation\ViewModels;

use App\Domain\Enums\ShopCategoryEnum;

class ShopCategoryViewModel
{
    public static function getName(ShopCategoryEnum $category): string
    {
        return match ($category) {
            ShopCategoryEnum::CAFE => 'カフェ',
            ShopCategoryEnum::RESTAURANT => 'レストラン',
            ShopCategoryEnum::BAR => 'バー',
            ShopCategoryEnum::SHOP => 'ショップ',
            ShopCategoryEnum::OTHER => 'その他',
        };
    }
} 