<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class ArrangePositions
{
    public static function run(int $id)
    {
            // Recupera as propostas ordenadas por horas
        $rankedProposals = DB::table('proposals')
            ->select('id', DB::raw('ROW_NUMBER() OVER (ORDER BY hours ASC) AS position'))
            ->where('project_id', $id)
            ->get();

            // Atualiza a posição das propostas
        foreach ($rankedProposals as $proposal) {
            DB::table('proposals')
                ->where('id', $proposal->id)
                ->update(['position' => $proposal->position]);
        }
    }
}
