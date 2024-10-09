<?php

namespace Database\Factories;

use App\Models\Proposal;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProposalFactory extends Factory
{
    protected $model = Proposal::class;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'hours' => $this->faker->numberBetween(10, 100),
            'project_id' => Project::factory(), // Cria um projeto associado automaticamente
            'created_at' => now(),
        ];
    }
}
