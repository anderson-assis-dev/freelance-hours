<?php

namespace Database\Seeders;

use App\Models\User;
use App\Actions\ArrangePositions;
use App\Models\Project;
use App\Models\Proposal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(10)->create(); // Cria 10 usuários
        Project::factory()->count(20)->create(); // Cria 20 projetos
        Proposal::factory()->count(30)->create(); // Cria 30 propostas
    }
}
