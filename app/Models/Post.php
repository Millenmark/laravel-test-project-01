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

    public function getTitleUpperCaseAttribute()
    {
        return strtoupper($this->title);
        /*
        *
        * $ php artisan tinker
        * Psy Shell v0.11.19 (PHP 7.4.33 — cli) by Justin Hileman
        * > \App\Models\Post::find(1)->title_upper_case
        * = "UNTITLED_02222"
        *
        */
    }

    public function users()
    {

        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }

    public function comments()
    {
        // because a Post(parent) has many Comments(child)
        return $this->hasMany(Comment::class, 'post_id');
    }
}
