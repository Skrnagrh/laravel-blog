<?php

namespace App\Http\Controllers\Home;

use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function store(Request $request, $commentId)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Redirect to the login page
            return redirect()->route('login')->with('error', 'You need to be logged in to reply.');
        }

        // Validate the incoming request data
        $request->validate([
            'textarea' => 'required|string|max:255', // Adjust the validation rules as needed
        ]);

        // Create a new reply
        $reply = new Reply();
        $reply->comment_id = $commentId;
        $reply->user_id = auth()->id();
        $reply->body = $request->input('textarea');
        $reply->save();

        // Additional logic if needed (e.g., sending notifications)

        return redirect()->back()->with('success', 'Reply submitted successfully!');
    }

    // ReplyController.php

public function delete($replyId)
{
    $reply = Reply::findOrFail($replyId);

    // Check if the authenticated user is the owner of the reply
    if (auth()->user()->id !== $reply->user_id) {
        return redirect()->back()->with('error', 'You are not authorized to delete this reply.');
    }

    // Perform deletion
    $reply->delete();

    return redirect()->back()->with('success', 'Reply deleted successfully.');
}

}
