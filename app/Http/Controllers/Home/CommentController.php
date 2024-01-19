<?php

namespace App\Http\Controllers\Home;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to submit a comment.');
        }
        // Validate the incoming request data
        $request->validate([
            'textarea' => 'required|string|max:255', // Adjust the validation rules as needed
        ]);

        // Create a new comment
        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->post_id = $postId;
        $comment->body = $request->input('textarea');
        $comment->save();

        return redirect()->back()->with('success', 'Comment submitted successfully!');
    }

//     public function destroy($commentId)
// {
//     $comment = Comment::findOrFail($commentId);

//     if (auth()->check() && $comment->user_id === auth()->user()->id) {
//         $comment->replies()->delete();
//         $comment->delete();

//         return redirect()->back()->with('success', 'Comment deleted successfully!');
//     }

//     return redirect()->back()->with('error', 'Unauthorized to delete the comment!');
// }

public function delete($commentId)
{
    $comment = Comment::findOrFail($commentId);

    // Check if the authenticated user is the owner of the comment
    if (auth()->user()->id !== $comment->user_id) {
        return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
    }

    // Perform deletion
    $comment->replies()->delete(); // Delete associated replies
    $comment->delete();

    return redirect()->back()->with('success', 'Comment deleted successfully.');
}
}
