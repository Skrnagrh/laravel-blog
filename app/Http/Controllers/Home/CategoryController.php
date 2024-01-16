<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
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

        return view('home.category', [
            "title" => "Semua kategori" . $title,
            "active" => 'posts',
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString(),
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
            // 'categories' => Category::get()->paginate(5)->withQueryString(),
            'categories' => Category::all()
        ]);

    }

    // public function show(Post $post)
    // {
    // return view('home.detail-post', [
    //     "title" => "Single post",
    //     "active" => 'posts',
    //     "post" => $post,
    //     'categories' => Category::all()
    // ]);
    // }




}
