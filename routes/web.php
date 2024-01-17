<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ReplyController;
use App\Http\Controllers\Home\CommentController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\Home\CategoryController;
use App\Http\Controllers\Dashboard\DashboardAllpostController;
use App\Http\Controllers\Dashboard\DashboardCategoryController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Dashboard\DashboardController as DashboardDashboardController;
use App\Http\Controllers\Dashboard\DashboardPostController as DashboardDashboardPostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Halaman Index
// Route::get('/', function () {
//     return view('home.index', [
//         "title" => "Home",
//         "active" => "home",
//     ]);
// });

// Halaman About
Route::get('/about', function () {
    return view('home.about', [
        "title" => "About",
        "active" => "about",
        "nama" => "Sukron Anugrah",
        "email" => "sukron@gmail.com",
        "image" => "skrnagrh.png",
        'categories' => Category::all(),
    ]);
});

// Postingan
Route::get('/', [HomeController::class, 'index']);
Route::get('detail-post/{post:slug}', [HomeController::class, 'show']);

Route::get('/kategori', [CategoryController::class, 'index']);
// Route::get('post/{post:slug}', [CategoryController::class, 'show']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// login
Route::get('/login', [AuthLoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthLoginController::class, 'authenticate']);
Route::post('/logout', [AuthLoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Halaman Dashboard Admin
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('auth');
// Route::get('/dashboard/categories/checkSlug', [DashboardPostController::class, 'checkSlugCategory'])->middleware('auth');

// Halaman Untuk Menambahkan Postingan
// Route::resource('/dashboard', DashboardDashboardController::class)->middleware('auth');
// Route::get('/dashboard/posts/checkSlug', [DashboardDashboardPostController::class, 'checkSlug'])->middleware('auth');
// Route::resource('/dashboard/posts', DashboardDashboardPostController::class)->middleware('auth');

// // Halaman Untuk Menambahkan Category hanya admin yang bisa
// Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('admin');
// Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');

// Group Middleware "auth"
Route::middleware(['auth'])->group(function () {
    // Halaman Untuk Menambahkan Postingan
    Route::get('/dashboard', [DashboardDashboardController::class, 'index']);
    Route::resource('/dashboard/posts', DashboardDashboardPostController::class);
    Route::get('/dashboard/posts/checkSlug', [DashboardDashboardPostController::class, 'checkSlug']);

    // Halaman Untuk Menambahkan Category hanya admin yang bisa
    Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show');
    Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug']);
});

// Group Middleware "admin"
Route::middleware(['admin'])->group(function () {
    // Halaman Untuk Menambahkan Category hanya admin yang bisa
    Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show');
    Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug']);

    // Route::resource('/dashboard/all-post', DashboardAllpostController::class)->except('create', 'edit', 'delete');
    Route::get('/dashboard/all-post', [DashboardAllpostController::class, 'index']);
    Route::get('/dashboard/all-post/{post:slug}', [DashboardAllpostController::class, 'show']);
});

Route::post('/comments/{postId}', [CommentController::class, 'store'])->name('comments.store');
// Route::delete('/comments/{commentId}', [CommentController::class, 'destroy'])->name('comments.destroy');
// Route::get('/comments/{commentId}', [ReplyController::class, 'delete'])->name('comment.delete');
Route::get('/comments/{commentId}', [CommentController::class, 'delete'])->name('comment.delete');

Route::post('/replies/{commentId}', [ReplyController::class, 'store'])->name('replies.store')->middleware('auth');
Route::get('/delete_reply/{replyId}', [ReplyController::class, 'delete'])->name('replies.delete');

