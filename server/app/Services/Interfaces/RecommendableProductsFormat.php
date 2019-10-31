<?php

namespace App\Services\Interfaces;

interface RecommendableProductsFormat
{
    public static function format(string $city): array;
}
