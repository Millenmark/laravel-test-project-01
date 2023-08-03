<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
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
        $posts = Post::factory(10)
            // ->has(Comment::factory(3), 'comments') //each post has 3 comments
            ->state([
                'title' => 'untitled_02222'
            ])
            ->create();

        $posts->each(function (Post $post) {
            $post->users()->sync([FactoryHelper::getRandomModelId(User::class)]);
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
