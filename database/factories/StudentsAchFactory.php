<?php

namespace Database\Factories;

use App\Models\StudentsAch;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsAchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentsAch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_mahasiswa' => $this->faker->name(),
            'nama_kegiatan' => $this->faker->words(5, true),
            'waktu_penyelenggaraan' => $this->faker->dateTimeThisYear(),
            'tingkat' => $this->faker->word(),
            'prestasi' => $this->faker->words(6, true)
        ];
    }
}
