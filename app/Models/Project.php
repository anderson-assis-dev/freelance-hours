<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * Atributos que podem ser atribuídos em massa.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'status',
        'tech_stack',
        'ends_at',
    ];

    /**
     * Relacionamento: Um projeto pertence a um usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacionamento: Um projeto pode ter várias propostas.
     */
    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}
