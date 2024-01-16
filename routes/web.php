<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\Home\CategoryController;
use App\Http\Controllers\Home\HomeController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// Halaman Untuk Menambahkan Postingan
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Halaman Untuk Menambahkan Category hanya admin yang bisa
// Route::get('/dashboard/categories/checkSlug', [DashboardPostController::class, 'checkSlugCategory'])->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
