<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Drug extends Model
{
    public function prescriptions(): HasMany
    {
        return $this->hasMany(Prescription::class);
    }

    public function contraindications(): HasMany
    {
        return $this->hasMany(Contraindication::class);
    }
}
