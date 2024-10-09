<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    /**
     * Atributos que podem ser atribuídos em massa.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'hours',
        'project_id',
    ];

    /**
     * Relacionamento: Uma proposta pertence a um projeto.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
