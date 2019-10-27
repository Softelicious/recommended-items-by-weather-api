<?php

namespace Tests\Unit;

use App\Product;
use GuzzleHttp\Client;
use Tests\TestCase;

class AppTest extends TestCase
{
    /**
     * @return void
     * @test
     */

    public function checkIfValidationPasses()
    {
            $this->validatePass('kaunas');
    }

    /**
     * @return void
     * @test
     */

    public function checkIfValidationPasses2()
    {
        $this->validatePass('rokiskis');
    }

    /**
     * @return void
     * @test
     */

    public function checkIfValidationDoesntPass()
    {
        $this->validateFail('dsfsfd');
    }

    /**
     * @return void
     * @test
     */

    public function checkIfValidationDoesntPass2()
    {
        $this->validateFail('123456');
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

    /**
     * @param string $input
     */

    public function validateFail($input){
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
     * @param string $input
     */

<<<<<<< HEAD:server/tests/Unit/AppTest.php
    public function validatePass($input){
        try{
            $client = new Client();
            $client->get("https://api.meteo.lt/v1/places/$input/forecasts/long-term")->getBody();
        }catch(\Exception $e){
            $this->assertTrue(true);
=======
    public function checkIfSeedsWorked(){
        $data = Product::find(13)->weathers;
        if(!count($data)>0){
            $this->assertFalse(true);
>>>>>>> a3e216b10bc239365bac2433dd294babff5ded6f:server/tests/Unit/ExampleTest.php
            return;
        }
        $this->assertFalse(true);
        return;
    }
}
