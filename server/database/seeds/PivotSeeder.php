<?php

use App\Product;
use Illuminate\Database\Seeder;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i<=15; $i++){
            Product::find($i)->weathers()->sync([$faker->numberBetween(0,12), $faker->numberBetween(0,12)]);
        }
    }
}
