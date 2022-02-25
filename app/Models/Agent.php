<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the travailleurs for the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travailleurs()
    {
        return $this->hasMany(Travailleur::class);
    }

    /**
     * Get the agences that owns the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agences()
    {
        return $this->belongsTo(Agence::class);
    }
}
