<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Results extends Model
{
    use HasFactory;
    protected $fillable = [
        'click_link',
        'submit_creds',
        'url_token',
        'canary_url',
        'canary_id',
    ];

    public function employee():HasMany{
        return $this->HasMany(Employee::class);
    }

    public function campaign():BelongsTo{
        return $this->belongsTo(Campaign::class);
    }
}
