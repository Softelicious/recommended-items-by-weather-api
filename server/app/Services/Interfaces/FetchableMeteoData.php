<?php

namespace App\Services\Interfaces;

interface FetchableMeteoData
{
    public function getMeteoResponse(string $city): string;
}
