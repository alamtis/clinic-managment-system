<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'email', 'gender',  'birthdate', 'ssin'];



    public function consultations(): HasMany
    {
        return $this->hasMany(Consultation::class);
    }

    public function pathology(): BelongsTo
    {
        return $this->belongsTo(Pathology::class);
    }

    protected function getAgeAttribute() {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }
}
