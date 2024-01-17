<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming you have at least one user and one post
        $user = User::first();
        $post = Post::first();

        // Creating a few comments for the post
        Comment::create([
            'post_id' => $post->id,
            'user_id' => $user->id,
            'body' => 'This is a sample comment.',
        ]);

        Comment::create([
            'post_id' => $post->id,
            'user_id' => $user->id,
            'body' => 'Another comment on the same post.',
        ]);
    }
}
