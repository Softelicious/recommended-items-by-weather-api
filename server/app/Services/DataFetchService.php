<?php

namespace App\Services;

use App\Services\Interfaces\FetchableMeteoData;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class DataFetchService implements FetchableMeteoData
{
    public function getMeteoResponse(string $city): string
    {
        $client = new Client();
        try {
            $response = $client->get("https://api.meteo.lt/v1/places/$city/forecasts/long-term")->getBody();
        } catch (Exception $e) {
            throw new \Exception($e->getCode());
        }
        return $response;
    }
}
