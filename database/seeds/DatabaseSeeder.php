<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountyTableSeeder::class);
        $this->call(ConstituencyTableSeeder::class);
        $this->call(WardTableSeeder::class);
        $this->call(PollingStationTableSeeder::class);
    }
}
