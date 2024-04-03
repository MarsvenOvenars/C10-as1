<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Comment extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id',
    ];

    public $timestamps = false;


    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
}
