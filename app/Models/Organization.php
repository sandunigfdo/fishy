<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = [
        'o_name',
        'o_email',
        'user_id'
    ];

    /**
     * Relationship associated with the organization
     */
    public function user():HasOne
    {
        return $this->hasOne(User::class);
    }
}
