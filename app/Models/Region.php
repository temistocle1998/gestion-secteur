<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Region extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * The secteurs that belong to the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function secteurs()
    {
        return $this->belongsToMany(Secteur::class, 'regions_secteurs', 'region_id', 'secteur_id');
    }

}
