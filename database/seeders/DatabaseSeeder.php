<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitySeeder::class);
        $this->call(BusSeeder::class);
        $this->call(TripSeeder::class);
        $this->call(TicketSeeder::class);
    }
}
