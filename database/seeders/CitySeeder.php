<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(public_path('eg_cities.json'));
	    $objects = json_decode($json,true);
        $cities = array_map(function ($objects) {
            return [
                "name" => $objects['city_name_en']
            ];
        }, $objects);
        DB::table('cities')->upsert($cities,['name']);
    }
}
