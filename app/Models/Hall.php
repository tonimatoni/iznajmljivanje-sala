<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hall extends Model
{
    use HasFactory;

    /**
     * Get all of the rents for the Hall
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rents(): HasMany
    {
        return $this->hasMany(Rent::class, 'hall_id', 'id');
    }

    /**
     * Get the hallType that owns the Hall
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hallType(): BelongsTo
    {
        return $this->belongsTo(HallType::class, 'hall_type_id', 'id');
    }
}
