<?php

namespace App\Http\Controllers;

use App\Services\ResponseService;
use Illuminate\Http\Response;

class WeatherController extends Controller
{
    /**
     * @param string $city
     * @return Response
     */
    public function index($city)
    {
        return response(ResponseService::format($city));
    }
}
