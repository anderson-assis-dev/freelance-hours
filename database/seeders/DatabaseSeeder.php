<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Proposal;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->count(10)->create(); // Cria 10 usuários
        Project::factory()->count(20)->create(); // Cria 20 projetos
        Proposal::factory()->count(30)->create(); // Cria 30 propostas
    }
}
