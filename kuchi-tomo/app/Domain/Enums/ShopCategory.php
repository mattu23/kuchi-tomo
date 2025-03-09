<?php

namespace App\Domain\Enums;

enum ShopCategoryEnum: string
{
    case CAFE = 'cafe';
    case RESTAURANT = 'restaurant';
    case BAR = 'bar';
    case SHOP = 'shop';
    case OTHER = 'other';

    public function getName(): string
    {
        return match ($this) {
            self::CAFE => 'カフェ',
            self::RESTAURANT => 'レストラン',
            self::BAR => '居酒屋',
            self::SHOP => 'ショップ全般',
            self::OTHER => 'その他',
        };
    }
}
