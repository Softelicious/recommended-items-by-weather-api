<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExceptionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param int $code
     * @return Response
     */
    public function __invoke(int $code)
    {
        switch ($code){
            case 404:
                return response()->json(['message' => 'Blogai įvestas miestas'], 404);
                break;
            case 500:
                return response()->json(['message' => 'Meteo neveikia'], 500);
                break;
            default:
                return response()->json(['message' => 'Nežinoma klaida']);
        }
    }
}
