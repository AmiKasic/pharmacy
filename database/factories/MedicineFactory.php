<?php

namespace Database\Factories;
use App\Models\Medicine;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineFactory extends Factory
{
    /**
     * The name of the Factory's corresponding model.
     *
     * @var string
     */

    protected $model = Medicine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'year' => now(),
            'price' => $this->faker->randomDigit(),
            'category' => $this->faker->unique()->numberBetween(1,1000),
            'weight' => $this->faker->numberBetween(0,1000),
            'brand' => $this->faker->numberBetween(1,3),
        ];
    }
}
