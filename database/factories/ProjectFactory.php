<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'user_id' => User::factory(), // Cria um usuário associado automaticamente
            'status' => $this->faker->randomElement(['active', 'completed', 'pending']),
            'tech_stack' => json_encode($this->faker->randomElements(['PHP', 'JavaScript', 'React', 'Vue', 'Laravel'], 2)), // Pilha de tecnologia fictícia
            'created_at' => now(),
            'ends_at' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
        ];
    }
}
