<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Post;

class DashboardAuthorController extends Controller
{
    // public function showProfile($username)
    // {
    //     // $user = Profile::whereHas('user', function ($query) use ($username) {
    //     //     $query->where('username', $username);
    //     // })->first();
    //     $user = User::with('posts')->whereHas('user', function ($query) use ($username) {
    //         $query->where('username', $username);
    //     })->first();

    //     if (!$user) {
    //         abort(404);
    //     }

    //     $posts = $user->posts;

    //     return view('dashboard.allpost.profile', [
    //         'user' => $user,
    //         'posts' => $posts,
    //     ]);
    // }

    public function showProfile($username)
    {
        $user = User::with(['posts.user'])->where('username', $username)->first();

        if (!$user) {
            abort(404);
        }

        $posts = $user->posts;

        return view('dashboard.allpost.profile', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

}
