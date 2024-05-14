<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'object', 'patient_id', 'doctor_id'];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function prescription(): HasOne
    {
        return $this->hasOne(Prescription::class);
    }

    protected function getStartAtAttribute($value): string
    {
        return Carbon::parse($value)->format('d/m/Y H:i');
    }

    protected function getEndAtAttribute($value): string
    {
        return Carbon::parse($value)->format('d/m/Y H:i');
    }
}
