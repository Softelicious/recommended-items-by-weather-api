<?php

use App\Weather;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param string $condition
     * @return void
     */
    public function create(string $condition){
        Weather::create([
            'condition' => $condition
        ]);
    }
    public function run()
    {
        $this->create('clear');
        $this->create('isolated-clouds');
        $this->create('scattered-clouds');
        $this->create('overcast');
        $this->create('light-rain');
        $this->create('moderate-rain');
        $this->create('heavy-rain');
        $this->create('sleet');
        $this->create('light-snow');
        $this->create('moderate-snow');
        $this->create('heavy-snow');
        $this->create('fog');
        $this->create('na');
    }
}
