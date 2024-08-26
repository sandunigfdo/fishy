<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;
    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'position',
        'department',
        'url_token',
        'group_id',
    ];
    public function user():HasOne{
        return $this->hasOne(User::class);
    }
    public function group():BelongsTo{
        return $this->belongsTo(Group::class);
    }
}
