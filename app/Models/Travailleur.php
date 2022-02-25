<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travailleur extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the problemes for the Travailleur
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function problemes()
    {
        return $this->hasOne(Probleme::class);
    }

    /**
     * Get the secteurs that owns the Travailleur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function secteurs()
    {
        return $this->belongsTo(Secteur::class);
    }
}
