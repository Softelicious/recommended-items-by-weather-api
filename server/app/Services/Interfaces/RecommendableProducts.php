<?php

namespace App\Services\Interfaces;

interface RecommendableProducts
{
    public function getRecommendedProducts(string $rawMeteoData): object;
}
