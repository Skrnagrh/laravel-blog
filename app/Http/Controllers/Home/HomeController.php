<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
    return view('home.detail-post', [
        "title" => "Single post",
        "active" => 'posts',
        "post" => $post,
            'categories' => Category::paginate(5)->withQueryString(),
            // 'categories' => Category::all()
    ]);
    }
}
