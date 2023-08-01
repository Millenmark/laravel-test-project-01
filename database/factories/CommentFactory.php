<?php

namespace Database\Factories;

use App\Models\Post;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $postId = FactoryHelper::getRandomModelId(Post::class);

        return [
            'body' => [],
            'user_id' => 1,
            'post_id' => $postId,
        ];
    }
}
