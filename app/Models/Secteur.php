<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The regions that belong to the Secteur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function regions()
    {
        return $this->belongsToMany(Region::class, 'regions_secteurs', 'region_id', 'secteur_id');
    }

    /**
     * Get all of the travailleurs for the Secteur
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travailleurs()
    {
        return $this->hasMany(Travailleur::class, 'secteur_id');
    }
}
