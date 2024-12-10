<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = \App\Models\Teacher::class;

    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(\App\Models\Teacher::VALID_TITLES),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'personal_number' => $this->faker->numerify('######'), // Např. 123456
            "user_id" => 1,
        ];
    }
}
