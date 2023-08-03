<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('comments')->truncate();
        Comment::factory(3)
            // ->for(Post::factory(1)) //Make a 3 comments for post with an id of 1
            ->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
