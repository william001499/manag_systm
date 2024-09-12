<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable =[
        'country_id',
        'name'
    ];
    public function country():BelongsTo
    {
        return $this->belongs(country::class);
    }
}
