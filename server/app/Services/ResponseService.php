<?php

namespace App\Services;

use App\Services\Interfaces\RecommendableProductsFormat;

class ResponseService implements RecommendableProductsFormat
{
    public static function format(string $city): array
    {
        $dataFetch = new DataFetchService();
        $weatherCondition = new WeatherConditionService();
        $recommendedProducts = new RecommendedProductsService();
        $response = $dataFetch->getMeteoResponse($city);
        return
            [
            'city' => $city,
            'current_weather' => $weatherCondition->getWeatherCondition($response),
            'recommended_products' => $recommendedProducts->getRecommendedProducts($response)
            ];
    }
}
