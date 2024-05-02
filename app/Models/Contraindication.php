<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contraindication extends Model
{
    public function drugs(): BelongsToMany
    {
        return $this->belongsToMany(Contraindication::class);
    }

    public function pathologies(): BelongsToMany
    {
        return $this->belongsToMany(Pathology::class);
    }
}
