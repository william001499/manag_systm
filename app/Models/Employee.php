<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    Protected $guarded =[];

    Public function department(): BelongsTo
    {
        return $this->belongsTo(Depatment::Class);
    }

    Public function Country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    Public function state(): BelongsTo
    {
        return $this->belongsTo(state::class);
    }
    Public function City(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    
}
