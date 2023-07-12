<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'sponsored',
        'name',
        'duration',
        'price',
    ];

    public function apartments(): BelongsToMany
    {
        return $this->belongsToMany(Apartment::class)->wherePivot('expire_date');
    }
}
