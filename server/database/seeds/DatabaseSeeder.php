<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory( Product::class, 15)->create();
        $this->call(ConditionSeeder::class);
        $this->call(PivotSeeder::class);
    }
}
