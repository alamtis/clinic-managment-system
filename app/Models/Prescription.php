<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prescription extends Model
{
    public function consultation(): BelongsTo
    {
        return $this->belongsTo(Consultation::class);
    }

    public function drugs(): HasMany
    {
        return $this->hasMany(Drug::class);
    }
}
