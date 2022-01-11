<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function chef(): BelongsTo
    {
        return $this->belongsTo(Chefs::class);
    }

    /**
     * @return HasMany
     */
    public function events(): HasMany
    {
        return $this->hasMany(Events::class);
    }
}
