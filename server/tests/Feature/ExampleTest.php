<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIfEndpointWorks()
    {
        $response = $this->get('/api/products/recommended/Kaunas');
        $response->assertStatus(200);
    }

    public function testIfEndointRetursCity()
    {
        $input = 'kaunas';
        $response = $this->get("/api/products/recommended/$input");

        $response->assertJson([
            'city' => $input,
        ]);
    }


}
