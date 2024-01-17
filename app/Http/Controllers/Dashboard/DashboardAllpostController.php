<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAllpostController extends Controller
{
    public function index()
    {
        return view('dashboard.allpost.index', [
            // 'posts' => Post::latest()->get(),
            "posts" => Post::latest()->paginate(15)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('dashboard.allpost.show', [
            'post' => $post,
            // 'categories' => Category::all(),
        ]);
    }
}
