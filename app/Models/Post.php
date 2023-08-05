<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];

    protected $casts = [
        'body' => 'array',
    ];

    // This is called accessor, it should start with "get" and ends with "Attribute"
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

    // This is called mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
        /*
        * $ php artisan tinker
        * Psy Shell v0.11.19 (PHP 7.4.33 — cli) by Justin Hileman
        * > $post = \App\Models\Post::find(1)
        * = App\Models\Post {#6459
        *     id: 1,
        *     title: "untitled_02222",
        *     body: "[]",
        *     created_at: "2023-07-30 10:17:12",
        *     updated_at: "2023-07-30 10:17:12",
        * }
        * 
        * > $post->title = 'HEYOOOOOO'
        * = "HEYOOOOOO"
        * 
        * > $post
        * = App\Models\Post {#6459
        *     id: 1,
        *     title: "heyoooooo",
        *     body: "[]",
        *     created_at: "2023-07-30 10:17:12",
        *     updated_at: "2023-07-30 10:17:12",
        * }
        * 
        * >
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
