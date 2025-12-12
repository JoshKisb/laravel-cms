<?php

namespace App\Models;

use App\Traits\IsTenantModel;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use IsTenantModel;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'published_at',
        'status',
        'user_id',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
