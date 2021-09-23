<?php

namespace Database\Factories;

use App\Models\Talent;
use Illuminate\Database\Eloquent\Factories\Factory;

class TalentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Talent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
           'sector_id' => rand(1, 5),
           'role_id' => rand(1, 5),
           'canton' => $this->faker->randomElement(['AG', 'ZH', 'BE']),
        ];
    }
}
