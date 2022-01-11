<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chefs extends Model
{
    use HasFactory;

    /**
     * @param string $name
     * @return string
     */
    public function getNameAttribute(string $name): string
    {
        return 'Chef ' . $name;
    }

    /**
     * @return HasMany
     */
    public function classes(): HasMany
    {
        return $this->hasMany(Classes::class);
    }
}
