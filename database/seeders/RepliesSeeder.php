<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Reply;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming you have at least one user and one comment
        $user = User::first();
        $comment = Comment::first();

        // Creating a few replies for the comment
        Reply::create([
            'comment_id' => $comment->id,
            'user_id' => $user->id,
            'body' => 'This is a sample reply.',
        ]);

        Reply::create([
            'comment_id' => $comment->id,
            'user_id' => $user->id,
            'body' => 'Another reply to the same comment.',
        ]);

        // You can add more replies as needed
    }
}
