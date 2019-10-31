<?php

namespace App\Services;

use App\Http\Resources\ProductsResource;
use App\Services\Interfaces\RecommendableProducts;
use App\Weather;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RecommendedProductsService implements RecommendableProducts
{
    public function getRecommendedProducts(string $rawMeteoData): object
    {
        $currentWeatherCondition = $this->getWeatherCondition($rawMeteoData);
        $products = $this->getProductsBy($currentWeatherCondition);
        return $this->formatWithProductResource($products);
    }

    private function getWeatherCondition(string $rawMeteoData): string
    {
        $dataArray = json_decode($rawMeteoData);
        return $dataArray->forecastTimestamps[0]->conditionCode;
    }

    private function getProductsBy(string $currentWeatherCondition): object
    {
        return Weather::where('condition', $currentWeatherCondition)->first()->products;
    }

    private function formatWithProductResource(object $products): AnonymousResourceCollection
    {
        $productsFormatted = ProductsResource::collection($products);
        return $productsFormatted;
    }
}
