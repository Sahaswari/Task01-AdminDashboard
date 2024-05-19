<?php

namespace Database\Factories;

use App\Models\ContainType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContainTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContainType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_name' => $this->faker->word,
            'project_type' => $this->faker->word,
            'assign_name'  => $this->faker->name,
            'status'       => $this->faker->randomElement(['pending', 'completed', 'in_progress']),
            'user_id'      => \App\Models\User::factory(),
        ];
    }
}
