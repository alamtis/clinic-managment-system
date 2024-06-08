<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Secretary extends Model
{
    protected $fillable = [
        'user_id',
        'doctor_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

}
