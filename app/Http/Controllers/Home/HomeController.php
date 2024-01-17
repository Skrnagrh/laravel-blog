<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reply;

class HomeController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('home.index', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString(),
            'categories' => Category::paginate(5)->withQueryString(),
            "postsbawah" => Post::latest()->filter(request(['category']))->paginate(1)->withQueryString(),
            // 'categories' => Category::all()
        ]);

    }


    public function show(Post $post)
    {
        // $postWithComments = $post->load('comments.replies', 'comments.user');
        return view('home.detail-post', [
            "title" => "Single post",
            "active" => 'posts',
            "post" => $post,
            // "commentrep" => Comment::with('replies', 'user')->where('post_id', $post->id)->get(),
            'categories' => Category::paginate(5)->withQueryString(),
            // "comment" => Comment::orderby('id', 'desc')->get(),
            // "reply" => Reply::orderby('id', 'desc')->get(),
            "comment" => Comment::where('post_id', $post->id)->orderBy('id', 'desc')->get(),
            "reply" => Reply::whereHas('comment', function ($query) use ($post) {
                $query->where('post_id', $post->id);
            })->orderBy('id', 'desc')->get(),
        ]);
    }
}
