<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'created_date',
        'launch_date',
        'status',

    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function results():HasMany{
        return $this->hasMany(Results::class);
    }

}
