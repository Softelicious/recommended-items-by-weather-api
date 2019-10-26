<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsResource;
use App\Weather;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index($city){
        $client = new Client();
        try{
            $response = $client->get("https://api.meteo.lt/v1/places/$city/forecasts/long-term")->getBody();
        }catch(\Exception $e){
            return response([], 204);
        }
        $dataArray = json_decode($response);
        $condition = $dataArray->forecastTimestamps[0]->conditionCode;
        $recommendedProductsRaw = Weather::where('condition', $condition)->first()->products;
        $recommendedProductsFormatted = ProductsResource::collection($recommendedProductsRaw);

        return response([
            'city' => $city,
            'current_weather' => $condition,
            'recommended_products' => $recommendedProductsFormatted]);
    }
}
