<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Group extends Model
{
    use HasFactory;
    // Add fillable parameters of the groups
    protected $fillable = [
        'name',
    ];
    // Relationship with users table
    public function users():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
