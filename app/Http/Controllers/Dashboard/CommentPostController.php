<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentPostController extends Controller
{
    // public function index($postId)
    // {
    //     // Ambil postingan berdasarkan ID
    //     $post = Post::findOrFail($postId);

    //     // Ambil komentar yang terkait dengan postingan
    //     $comments = Comment::where('post_id', $postId)->with('user')->get();

    //     return view('dashboard.comment.index', [
    //         'post' => $post,
    //         'comments' => $comments,
    //     ]);
    // }
    public function index()
{
    // Dapatkan ID pengguna yang saat ini login
    $userId = Auth::id();

    // Ambil semua postingan berdasarkan user_id
    $posts = Post::where('user_id', $userId)->get();

    // Inisialisasi array untuk menyimpan semua komentar
    $allComments = [];

    // Iterasi melalui setiap postingan dan ambil komentar yang terkait
    foreach ($posts as $post) {
        $comments = $post->comments()->with('user')->get();
        $allComments[$post->id] = [
            'post' => $post,
            'comments' => $comments,
        ];
    }

    return view('dashboard.comment.index', [
        'allComments' => $allComments,
    ]);
}

}
