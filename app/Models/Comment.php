<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $guarded = [
        'id',
        'user_id',
        'post_id',
        'content',
        'like_count',

    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public $timestamps = false;


    public function subject(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
}
