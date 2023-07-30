<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'body' => 'array',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function comments()
    {
        // because a Post(parent) has many Comments(child)
        return $this->hasMany(Comment::class, 'post_id');
    }
}
