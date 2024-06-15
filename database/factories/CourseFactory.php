<?php
namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
           // 'id' => $this->faker->unique()->randomNumber(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Published', 'Pending']),
            'is_premium' => $this->faker->boolean,
            'created_at' => now(),
        ];
    }
}
