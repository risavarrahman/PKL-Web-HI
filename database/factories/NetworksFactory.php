<?php

namespace Database\Factories;

use App\Models\Networks;
use Illuminate\Database\Eloquent\Factories\Factory;

class NetworksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Networks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'starting_date' => $this->faker->dateTimeThisYear(),
            'ending_date' => $this->faker->dateTimeThisYear('+2 years'),
            'first_party' => $this->faker->company(),
            'second_party' => $this->faker->company(),
            'status' => $this->faker->word('active', true),
            'partner_type' => $this->faker->words(2, true),
            'agreement_type' => $this->faker->words(3, true)
        ];
    }
}
