<?php

namespace Database\Factories;

use App\Models\Bus;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $seat_numbers = [];
        $seat_numbers_count = config('app.DEFAULT_SEAT_NUMBERS');
        for ($i = 0; $i < $seat_numbers_count; $i++)
        {
            array_push($seat_numbers,$this->faker->unique()->str_random(2));//numberBetween(1, $seat_numbers_count));
        }
        dd($seat_numbers);
        return [
            'seat_numbers' => json_encode(["key" => $this->faker->randomNumber()] )
        ];
    }
}
