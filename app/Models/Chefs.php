<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    private string $name;

    /**
     * @return string
     */
    public function getName() : string
    {
        return 'Chef ' . $this->name;
    }
}
