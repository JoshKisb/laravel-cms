<?php

namespace App\Models;

use App\Traits\IsTenantModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    use IsTenantModel;

    protected $fillable = [
        "name",
        "slug",
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
