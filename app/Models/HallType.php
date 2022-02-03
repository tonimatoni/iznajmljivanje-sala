<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HallType extends Model
{
    use HasFactory;

    /**
     * Get all of the halls for the HallType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function halls(): HasMany
    {
        return $this->hasMany(Hall::class, 'hall_type_id', 'id');
    }
}
