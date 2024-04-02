<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [
        'id',
        'name',
    ];

    public $timestamps = false;


    public function subject(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
}