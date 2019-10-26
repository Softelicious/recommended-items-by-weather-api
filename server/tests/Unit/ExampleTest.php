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
     * A basic test example.
     *
     * @return void
     */
    public function testCheckIfValidationPasses()
    {
            $input = 'kaunas';
            $client = new Client();
            try{
                $response = $client->get("https://api.meteo.lt/v1/places/$input/forecasts/long-term")->getBody();
            }catch(\Exception $e){
                $this->assertFalse(true);
                return;
            }
            $this->assertTrue(true);
            return;
    }

    public function testCheckIfValidationDoesntPass()
    {
        $input = 'kauna';
        $client = new Client();
        $response = json_encode([]);
        try{
            $response = $client->get("https://api.meteo.lt/v1/places/$input/forecasts/long-term")->getBody();
        }catch(\Exception $e){
            $array = json_decode($response);
            $this->assertTrue(true);
            return;
        }
        $this->assertFalse(true);
        return;
    }
    public function testCheckIfValidationDoesntPass2()
    {
        $input = '2';
        $client = new Client();
        $response = json_encode([]);
        try{
            $response = $client->get("https://api.meteo.lt/v1/places/$input/forecasts/long-term")->getBody();
        }catch(\Exception $e){
            $array = json_decode($response);
            $this->assertTrue(true);
            return;
        }
        $this->assertFalse(true);
        return;
    }
    public function testCheckIfSeedsWorked(){
        $data = Product::find(15)->whethers;
        if(count($data)>0){
            $this->assertTrue(true);
        }else{
            $this->assertFalse(true);
        }
    }
}
