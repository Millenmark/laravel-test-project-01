<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('posts')->truncate();
        Post::factory(10)
            // ->has(Comment::factory(3), 'comments') //each post has 3 comments
            ->state([
                'title' => 'untitled_02222'
            ])
            ->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
