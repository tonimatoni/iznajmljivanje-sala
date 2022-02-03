<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rent extends Model
{
    use HasFactory;

    /**
     * Get the hall that owns the Rent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hall(): BelongsTo
    {
        return $this->belongsTo(Hall::class, 'hall_id', 'id');
    }
}
