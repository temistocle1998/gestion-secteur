<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the regions associated with the Agence
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function regions()
    {
        return $this->hasOne(Region::class);
    }

    /**
     * Get all of the agents for the Agence
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
