<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $guarded = [
        'id',
        'user_id',
        'category_id',
        'title',
        'content',
        'view_count',
        'like_count',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
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
