<?php

namespace Database\Factories;

use App\Models\LecturersAct;
use Illuminate\Database\Eloquent\Factories\Factory;

class LecturersActFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LecturersAct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'activity' => $this->faker->paragraph(),
            'organizer' => $this->faker->company()
        ];
    }
}
