<?php

namespace Tests\Unit;

use App\Http\Resources\ProductsResource;
use App\Product;
use App\Weather;
use GuzzleHttp\Client;
use SebastianBergmann\Environment\Console;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * @return void
     * @test
     */

    public function checkIfValidationPasses()
    {
            $input = 'kaunas';
            try{
                $client = new Client();
                $client->get("https://api.meteo.lt/v1/places/$input/forecasts/long-term")->getBody();
            }catch(\Exception $e){
                $this->assertFalse(true);
                return;
            }
            $this->assertTrue(true);
            return;
    }

    /**
     * @return void
     * @test
     */

    public function checkIfValidationDoesntPass()
    {
        $input = 'kauna';
        try{
            $client = new Client();
            $client->get("https://api.meteo.lt/v1/places/$input/forecasts/long-term")->getBody();
        }catch(\Exception $e){
            $this->assertTrue(true);
            return;
        }
        $this->assertFalse(true);
        return;
    }

    /**
     * @return void
     * @test
     */

    public function checkIfValidationDoesntPass2()
    {
        $input = '2';
        try{
            $client = new Client();
            $client->get("https://api.meteo.lt/v1/places/$input/forecasts/long-term")->getBody();
        }catch(\Exception $e){
            $this->assertTrue(true);
            return;
        }
        $this->assertFalse(true);
        return;
    }

    /**
     * @return void
     * @test
     */

    public function checkIfSeedsWorked(){
        $data = Product::find(13)->weathers;
        if(!count($data)>0){
            $this->assertFalse(true);
            return;
        }
        $this->assertTrue(true);
        return;

    }
}
