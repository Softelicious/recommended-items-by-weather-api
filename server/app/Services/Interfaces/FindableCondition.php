<?php

namespace App\Services\Interfaces;

interface FindableCondition
{
    public function getWeatherCondition(string $rawMeteoData): string;
}
